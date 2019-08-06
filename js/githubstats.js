/*
  The MIT License (MIT)

  Copyright (c) 2019 Matthew Rodusek All rights reserved.

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights
  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  copies of the Software, and to permit persons to whom the Software is
  furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in
  all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  SOFTWARE.
*/
$(document).ready(function() {

  function make_chart(labels, values) {
    var chart = new Chart(document.getElementById("language-chart"), {
      type: 'doughnut',
      data: {
        labels: labels,
        datasets: [{
          data: values,
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"]
          // backgroundColor: ["#1871a7", "#1d8acb", "#1d8acb", "#469fd4", "#98c9e7", "#c1dff0"]
        }],
      },
      options: {
        tooltips: {
          callbacks: {
            label: function(item, data) {
              var dataset = data.datasets[item.datasetIndex];
              var value = dataset.data[item.index];
              var label = data.labels[item.index];

              return label + ": " + value + "%";
            },
          },
        },
      },
    });
  }

  // If we have ran this query before,
  // create the chart and don't run it again
  var labels = sessionStorage["rodusek.com:github-language-labels"];
  var values = sessionStorage["rodusek.com:github-language-values"];

  if (labels && values) {
    var labels = JSON.parse(labels);
    var values = JSON.parse(values);

    make_chart(labels, values);
    return;
  }

  // Query Github REST API for language information
  $.ajax({
    url: 'https://api.github.com/users/bitwizeshift/repos',
    data: {},
    datatType: 'json',
    type: 'GET',
    cache: true,
    success: function (data, status, jqxhr) {
      // The only repositories of interest are the non forked ones
      repos = data.filter(object => {
        return !object.fork;
      });
      console.log(data);

      var language_stats = {};

      // Asynchronously query stats on all public repos
      var results = repos.map(object => {
        return $.ajax({
          url: object.languages_url,
          data: {},
          datatType: 'json',
          type: 'GET',
          cache: true,
          success: function (data, status, jqxhr) {
            // Compute the language updates
            for (const [key, value] of Object.entries(data)) {
              language_stats[key] = (language_stats[key] || 0) + value;
            }
          }
        });
      });

      // After all callbacks are completed, make the chart
      $.when.apply($, results).then(function() {
        // Sort entries by most used, and extract top 5
        var items = Object.keys(language_stats).map(function(key) {
          return [key, language_stats[key]];
        });
        items.sort(function(lhs, rhs) {
          return rhs[1] - lhs[1];
        });

        var top_five = items.slice(0, 5);
        var others   = items.slice(6);

        var labels = top_five.map(pair => {
          return pair[0];
        });
        labels.push("Other");

        var values = top_five.map(pair => {
          return pair[1];
        });
        values.push(others.map(pair => {
          return pair[1];
        }).reduce(function(sum, num){
          return sum + num;
        }));

        var sum = values.reduce(function(sum, num){
          return sum + num;
        });
        var normalized = values.map(value => {
          return ((value / sum) * 100).toFixed(2);
        });

        // Store this so that we don't need to run it next time
        sessionStorage["rodusek.com:github-language-labels"] = JSON.stringify(labels);
        sessionStorage["rodusek.com:github-language-values"] = JSON.stringify(normalized);

        make_chart(labels, normalized);
      });
    },
  });
});