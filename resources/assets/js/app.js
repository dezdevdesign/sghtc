
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

//Resource modules...
import helpers from './utilities/helpers';
window.helpers = new helpers();

require('./modules/workbench');
require('./modules/patientCreate');
require('./modules/department');
require('./modules/user');
