var chart = c3.generate({
  bindto: '#chart',
  data: {
    x: 'x',
    columns: [
      ['x', '2013-01-01', '2013-02-01', '2013-03-01', '2013-04-01', '2013-05-01', '2013-06-01', '2013-07-01', '2013-08-01', '2013-09-01', '2013-10-01', '2013-11-01', '2013-12-01'],
      ['Products 1', 15123, 14233, 25507, 9110, 15529, 20803, 19202, 23650, 15000, 23202, 12202, 26202],
      ['Products 2', 13400, 12800, 22800, 13400, 11800, 800, 21800, 6202, 25202, 9202, 22202, 18202],
      ['Products 3', 1700, 16700, 12800, 10300, 16800, 2200, 27800, 5202, 15202, 5202, 11202, 12202],
    ],
    type: 'spline'
  },

  axis: 
  {
    x: 
    {
        label: 
        { // ADD
          text: 'Months',
          position: 'outer-center'
        },  

      type: 'timeseries',
      tick: 
       {
        format: function(x) 
        {
          var month = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];

          return (month[x.getMonth()]);
        },
        fit: false
      }
    },

     y: 
      {
            min: 0,
            max: 30000,
            padding: 
            {
                bottom: 0,
                top: 0
            },
            tick: 
            {
                format: function (d) 
                {
                    switch (d) 
                    {
                        case 0:
                            return "0k"
                        case 6000:
                            return "6k"
                        case 12000:
                            return "12k"
                        case 18000:
                            return "18k"
                        case 24000:
                            return "24k"
                        case 30000:
                            return "30k"           

                    }
                },
                fit: false,
                values: [0, 6000,12000,18000,24000,30000],
                width: 0
            },

        label: 
        { // ADD
          text: 'Profit',
          position: 'outer-middle'
        }
      }

  }
});
