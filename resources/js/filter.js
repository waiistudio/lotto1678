import Vue from 'vue'

//Moment
var moment = require('moment-timezone');

Vue.filter('formatDateTime', function(value) {
    if (value) {
		return moment(String(value)).tz('Asia/Bangkok').format('DD-MM-YYYY HH:mm:ss');
    }
  })

  Vue.filter('formatDate', function(value) {
    if (value) {
		return moment(String(value)).tz('Asia/Bangkok').format('DD-MM-YYYY');
    }
  })