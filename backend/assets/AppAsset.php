<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
                     * Main backend application asset bundle.
         */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',

        /**
         * Bucket Admin Assets
         **/
        'assets/bucket_admin/bs3/css/bootstrap.min.css',
        'assets/bucket_admin/css/bootstrap-reset.css',
        'assets/bucket_admin/font-awesome/css/font-awesome.css',
        'assets/bucket_admin/css/style.css',
        'assets/bucket_admin/css/style-responsive.css',
        //'assets/bucket_admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.css',
        //'assets/bucket_admin/js/jvector-map/jquery-jvectormap-1.2.2.css',
        //'assets/bucket_admin/css/clndr.css',
        //'assets/bucket_admin/js/css3clock/css/style.css',
        //'assets/bucket_admin/js/morris-chart/morris.css',
        //'assets/bucket_admin/js/data-tables/DT_bootstrap.css',

        //'assets/bucket_admin/css/bootstrap-switch.css',

        //'assets/bucket_admin/js/bootstrap-fileupload/bootstrap-fileupload.css',

        //'assets/bucket_admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css',

        /**
         * Date, time, date range and date time picker assets
         **/
        //'assets/bucket_admin/js/bootstrap-datepicker/css/datepicker.css',
        //'assets/bucket_admin/js/bootstrap-timepicker/compiled/timepicker.css',
        //'assets/bucket_admin/js/bootstrap-colorpicker/css/colorpicker.css',
        //'assets/bucket_admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css',
        //'assets/bucket_admin/js/bootstrap-datetimepicker/css/datetimepicker.css',

        //'assets/bucket_admin/js/jquery-multi-select/css/multi-select.css',
        //'assets/bucket_admin/js/jquery-tags-input/jquery.tagsinput.css',
        //'assets/bucket_admin/js/select2/select2.css',
        /**
         * icheck Assets
         **/
        //'assets/bucket_admin/js/iCheck/skins/minimal/minimal.css',
        //'assets/bucket_admin/js/iCheck/skins/minimal/red.css',
        //'assets/bucket_admin/js/iCheck/skins/minimal/green.css',
        //'assets/bucket_admin/js/iCheck/skins/minimal/blue.css',
        //'assets/bucket_admin/js/iCheck/skins/minimal/yellow.css',
        //'assets/bucket_admin/js/iCheck/skins/minimal/purple.css',
        //'assets/bucket_admin/js/iCheck/skins/square/square.css',
        //'assets/bucket_admin/js/iCheck/skins/square/red.css',
        //'assets/bucket_admin/js/iCheck/skins/square/green.css',
        //'assets/bucket_admin/js/iCheck/skins/square/blue.css',
        //'assets/bucket_admin/js/iCheck/skins/square/yellow.css',
        //'assets/bucket_admin/js/iCheck/skins/square/purple.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/grey.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/red.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/green.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/blue.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/yellow.css',
        //'assets/bucket_admin/js/iCheck/skins/flat/purple.css',
        /**
         * jQuery Steps asset
         **/
        //'assets/bucket_admin/css/jquery.steps.css',
        //Custom CSS
    ];
    public $js = [
        /**
         * jQuery Assets
         * (If loaded here prevents modal popup from working correctly)
         **/
        //'assets/bucket_admin/js/jquery.js',
        //'assets/bucket_admin/js/jquery-1.8.3.min.js',
        //'js/bootstrap.min.js',


        'js/main.js', // For modal popup jQuery
        //'js/script.js', // Not used

        //'assets/bucket_admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js',
        'assets/bucket_admin/js/jquery.scrollTo.min.js',
        'assets/bucket_admin/js/jquery.scrollTo/jquery.scrollTo.js',
        'assets/bucket_admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js',
        'assets/bucket_admin/js/jquery.dcjqaccordion.2.7.js',
        'assets/bucket_admin/js/jquery.nicescroll.js', // Required for left side bar to work
        /**
         * jquery steps assets
         **/
        //'assets/bucket_admin/js/jquery-steps/jquery.steps.js',
        /**
         * Script Asset required by all pages
         **/
        'assets/bucket_admin/js/scripts.js', // Required by side bars
        //'assets/bucket_admin/bs3/js/bootstrap.min.js',
        /**
         * Sky icon assets
         **/
        //'assets/bucket_admin/js/skycons/skycons.js',
        /**
         * Calendar Assets
         **/
        //'assets/bucket_admin/js/calendar/clndr.js',
        //'assets/bucket_admin/js/calendar/moment-2.2.1.js',
        //'assets/bucket_admin/js/external-dragging-calendar.js',
        //'assets/bucket_admin/js/evnt.calendar.init.js',
        //'assets/bucket_admin/js/fullcalendar/fullcalendar.min.js',
        /**
         * Vector Maps Assets
         **/
        //'assets/bucket_admin/js/jvector-map/jquery-jvectormap-1.2.2.min.js',
        //'assets/bucket_admin/js/jvector-map/jquery-jvectormap-us-lcc-en.js',
        /**
         * Table Assets
         **/
        //'assets/bucket_admin/js/data-tables/DT_bootstrap.js',
        //'assets/bucket_admin/js/data-tables/jquery.dataTables.js',
        //'assets/bucket_admin/js/advanced-datatable/js/jquery.dataTables.js',
        //'assets/bucket_admin/js/dynamic_table_init.js',
        //'assets/bucket_admin/js/table-editable.js',
        /**
         * Gauge widget Asset
         **/
        //'assets/bucket_admin/js/gauge/gauge.js',
        /**
         * clock widget Asset
         **/
        //'assets/bucket_admin/js/css3clock/js/css3clock.js',
        /**
         * Charts Assets
         **/
        //'assets/bucket_admin/js/easypiechart/jquery.easypiechart.js',
        //'assets/bucket_admin/js/sparkline/jquery.sparkline.js',
        //'assets/bucket_admin/js/morris-chart/morris.js',
        //'assets/bucket_admin/js/morris-chart/raphael-min.js',

        //'assets/bucket_admin/js/dashboard.js',
        'assets/bucket_admin/js/jquery.customSelect.min.js',

        //'assets/bucket_admin/js/ion.rangeSlider-1.8.2/js/ion-rangeSlider/ion.rangeSlider.min.js',

        //'assets/bucket_admin/js/fuelux/js/tree.min.js',
        //'assets/bucket_admin/js/tree.js',
        /**
         * Flot Assets
         **/
        //'assets/bucket_admin/js/flot-chart/jquery.flot.js',
        //'assets/bucket_admin/js/flot-chart/jquery.flot.tooltip.min.js',
        //'assets/bucket_admin/js/flot-chart/jquery.flot.resize.js',
        //'assets/bucket_admin/js/flot-chart/jquery.flot.pie.resize.js',
        //'assets/bucket_admin/js/flot-chart/jquery.flot.animator.min.js',
        //'assets/bucket_admin/js/flot-chart/jquery.flot.growraf.js',
        /**
         * Draggable portlet Assets
         **/
        //'assets/bucket_admin/js/draggable-portlet.js',
        /**
         * iCheck Asset
         **/
        //'assets/bucket_admin/js/iCheck/jquery.icheck.js',
        //'assets/bucket_admin/js/icheck-init.js',
        /**
         * CK Editor Asset
         **/
        //'assets/bucket_admin/js/ckeditor/ckeditor.js',

        'assets/bucket_admin/js/bootstrap-switch.js',
        'assets/bucket_admin/js/fuelux/js/spinner.min.js',
        //'assets/bucket_admin/js/bootstrap-fileupload/bootstrap-fileupload.js',
        //'assets/bucket_admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js',
        //'assets/bucket_admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js',
        //'assets/bucket_admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js',
        //'assets/bucket_admin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js',
        //'assets/bucket_admin/js/bootstrap-daterangepicker/moment.min.js',
        //'assets/bucket_admin/js/bootstrap-daterangepicker/daterangepicker.js',
        //'assets/bucket_admin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
        //'assets/bucket_admin/js/bootstrap-timepicker/js/bootstrap-timepicker.js',
        //'assets/bucket_admin/js/jquery-multi-select/js/jquery.multi-select.js',
        //'assets/bucket_admin/js/jquery-multi-select/js/jquery.quicksearch.js',
        //'assets/bucket_admin/js/bootstrap-inputmask/bootstrap-inputmask.min.js',
        //'assets/bucket_admin/js/jquery-tags-input/jquery.tagsinput.js',
        //'assets/bucket_admin/js/select2/select2.js',
        //'assets/bucket_admin/js/select-init.js',
        //'assets/bucket_admin/js/toggle-init.js',
        //'assets/bucket_admin/js/advanced-form.js',
        /**
         * Form validation assets
         **/
        'assets/bucket_admin/js/jquery.validate.min.js',
        'assets/bucket_admin/js/validation-init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
