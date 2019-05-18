//The toFixed() method formats a number using fixed-point notation.
//The number of digits to appear after the decimal point

var vm = new Vue({
    el: '#vueapp',
    data: {       
                income: 0,
                hours: 0,
                weeks:0,
                hrly: 0,
                dailyRate: 0,
                weeklyRate: 0,
        
    },
    methods: {
        formSubmit: function(){
            console.log("formSubmit called");
            console.log(vm._data.income);
            console.log(vm._data.hours);
            console.log(vm._data.weeks);

            // Hourly Rate: 
            // [income / (52- weeks) x hoursWeek ] x2
            // Daily rate: 
            // hrRate  x 8 = dailyRate 
            // Weekly rate: 
            // daily rate x  5 = weeklyRate 

            //this is where you would plug in the actual formula

            
            var hrlyRate = [(vm._data.income / ((52-vm._data.weeks) * vm._data.hours))]*2
            var hrly = hrlyRate.toFixed();
            console.log(hrly);

            var dailyRate = (hrly * 8 )
            console.log(dailyRate);

            var weeklyRate = (dailyRate * 5 )
            console.log(weeklyRate);

            vm._data.hrly = hrly;
            vm._data.dailyRate = dailyRate;
            vm._data.weeklyRate = weeklyRate;
            
       
             
        }
    }
});