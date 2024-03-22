/* global Chart, coreui */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (v4.2.2): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

new DataTable('#emps', {
  layout: {
      topStart: {
          buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      }
  }
});

// Disable the on-canvas tooltip
Chart.defaults.pointHitDetectionRadius = 1;
Chart.defaults.plugins.tooltip.enabled = false;
Chart.defaults.plugins.tooltip.mode = 'index';
Chart.defaults.plugins.tooltip.position = 'nearest';
Chart.defaults.plugins.tooltip.external = coreui.ChartJS.customTooltips;
Chart.defaults.defaultFontColor = '#646470';
const random = (min, max) =>
// eslint-disable-next-line no-mixed-operators
Math.floor(Math.random() * (max - min + 1) + min);

let dept = [];
let emps = [];

$.ajax({
  method:'post',
  url:'getData.php',
  success:function(response){
    //console.log(response);
    let data=JSON.parse(response);
    for(let count=0; count<data.length; count++){
      for (const key in data[count]) {
        //console.log(key);
        // console.log(emps);
        // console.log(data);
        //console.log(data[count]['department_id']);
        dept[count] = data[count]['department_name'];
        emps[count] = data[count]['total_emps'];
        
      }
    }
   chart();
  }
})

// async function getData(){
//   let response = await fetch("getData.php");
//   let data = await response.json();
//   // console.log(response);
//   // console.log(data);
//   for(let count=0; count<data.length; count++){
//           for (const key in data[count]) {
//             //console.log(key);
//             // console.log(emps);
//             // console.log(data);
//             //console.log(data[count]['department_id']);
//             dept[count] = data[count]['department_name'];
//             emps[count] = data[count]['total_emps'];
            
//           }
//         }
//         chart();
// }
// getData();

 let salary=[];
 let emp_number=[];
$.ajax({
  method:'post',
  url:'getBar.php',
  success:function(response){
    //console.log(response);
    let data = JSON.parse(response);
    console.log(data);
    for(let count=0; count<data.length; count++){
      for (const key in data[count]) {
        //console.log(key);
        //console.log(data);
        emp_number.push(data[count][key]);
        salary.push(key);
      //emp_number = data[count][''];
    }
  }
  barChart();
  }
})

// async function barData( ){
//   let results = await fetch('getBar.php');
//   let datas = await results.json();
//   console.log(datas)

//   for(let count=0; count<datas.length; count++){
//     for (const key in datas[count]) {
//       emp_number.push(datas[count][key]) ;
//       salary.push(key) ;
//     }
//   }
//   barChart();
// }
// barData();

function barChart(){
  const cardChart4 = new Chart(document.getElementById('main-bar'), {
    type: 'bar',
    data: {
      labels: salary,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgba(245, 40, 145, 0.8)',
        borderColor: 'rgba(11, 40, 0, 0.8)',
        data: emp_number,
        barPercentage: 1
      }]
    },
    options: {
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        x: {
          grid: {
            display: true,
            drawTicks: true
          },
          ticks: {
            display: true
          }
        },
        y: {
          grid: {
            display: true,
            drawBorder: true,
            drawTicks: true
          },
          ticks: {
            display: true
          }
        }
      }
    }
  });
}

function chart(){
  const mainChart = new Chart(document.getElementById('main-chart'), {
    type: 'line',
    data: {
      labels: dept,
      datasets: [{
        label: 'My first Dataset',
        backgroundColor: coreui.Utils.hexToRgba(coreui.Utils.getStyle('--cui-info'), 10),
        borderColor: coreui.Utils.getStyle('--cui-info'),
        pointHoverBackgroundColor: '#fff',
        borderWidth: 2,
        data: emps,
        fill: true
       }
      //, {
      //   label: 'My Second dataset',
      //   borderColor: coreui.Utils.getStyle('--cui-success'),
      //   pointHoverBackgroundColor: '#fff',
      //   borderWidth: 2,
      //   data: [random(50, 200), random(50, 200), random(50, 200), random(50, 200), random(50, 200), random(50, 200), random(50, 200)]
      // }, {
      //   label: 'My Third dataset',
      //   borderColor: coreui.Utils.getStyle('--cui-danger'),
      //   pointHoverBackgroundColor: '#fff',
      //   borderWidth: 1,
      //   borderDash: [8, 5],
      //   data: [65, 65, 65, 65, 65, 65, 65]
      // }
    ]
    },
    options: {
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        x: {
          grid: {
            drawOnChartArea: false
          }
        },
        y: {
          ticks: {
            beginAtZero: true,
            maxTicksLimit: 5,
            stepSize: 1,
            max: 250
          }
        }
      },
      elements: {
        line: {
          tension: 0.4
        },
        point: {
          radius: 0,
          hitRadius: 10,
          hoverRadius: 4,
          hoverBorderWidth: 3
        }
      }
    }
  });
}

// $('#emps').DataTable();


// eslint-disable-next-line no-unused-vars
const cardChart1 = new Chart(document.getElementById('card-chart1'), {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,255,255,.55)',
      pointBackgroundColor: coreui.Utils.getStyle('--cui-primary'),
      data: [65, 59, 84, 84, 51, 55, 40]
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false,
          drawBorder: false
        },
        ticks: {
          display: false
        }
      },
      y: {
        min: 30,
        max: 89,
        display: false,
        grid: {
          display: false
        },
        ticks: {
          display: false
        }
      }
    },
    elements: {
      line: {
        borderWidth: 1,
        tension: 0.4
      },
      point: {
        radius: 4,
        hitRadius: 10,
        hoverRadius: 4
      }
    }
  }
});

// eslint-disable-next-line no-unused-vars
const cardChart2 = new Chart(document.getElementById('card-chart2'), {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'transparent',
      borderColor: 'rgba(255,255,255,.55)',
      pointBackgroundColor: coreui.Utils.getStyle('--cui-info'),
      data: [1, 18, 9, 17, 34, 22, 11]
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false,
          drawBorder: false
        },
        ticks: {
          display: false
        }
      },
      y: {
        min: -9,
        max: 39,
        display: false,
        grid: {
          display: false
        },
        ticks: {
          display: false
        }
      }
    },
    elements: {
      line: {
        borderWidth: 1
      },
      point: {
        radius: 4,
        hitRadius: 10,
        hoverRadius: 4
      }
    }
  }
});

// eslint-disable-next-line no-unused-vars
const cardChart3 = new Chart(document.getElementById('card-chart3'), {
  type: 'line',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgba(255,255,255,.2)',
      borderColor: 'rgba(255,255,255,.55)',
      data: [78, 81, 80, 45, 34, 12, 40],
      fill: true
    }]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        display: false
      },
      y: {
        display: false
      }
    },
    elements: {
      line: {
        borderWidth: 2,
        tension: 0.4
      },
      point: {
        radius: 0,
        hitRadius: 10,
        hoverRadius: 4
      }
    }
  }
});

// eslint-disable-next-line no-unused-vars



// eslint-disable-next-line no-unused-vars

//# sourceMappingURL=main.js.map