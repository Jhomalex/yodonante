<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Donito - yodonante</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/line-awesome/css/line-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">-->

    <link rel="stylesheet" type="text/css" href="/fonts/montserrat/styles.css">

    <link rel="stylesheet" type="text/css" href="/libs/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="/libs/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/admin/common.min.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="/css/admin/themes/primary.min.css">
    <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="/css/admin/themes/sidebar-black.min.css">
    <!-- END THEME STYLES -->

    <link rel="stylesheet" type="text/css" href="/libs/c3js/c3.min.css"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="/libs/gridstack/gridstack.min.css"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="/libs/gridstack/gridstack-extra.min.css"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="/libs/gridstack/gridstack.min.css"> <!-- Customization -->
    <link rel="stylesheet" type="text/css" href="/css/admin/widgets/panels.min.css">
    <link rel="stylesheet" type="text/css" href="/js/admin/charts/radial-progress/radial-progress.chart.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/general.css">
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

    <!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->

        <div class="ks-navbar-logo">
            <a href="index.html" class="ks-logo">yodonante</a>
            <!-- END GRID NAVIGATION -->
        </div>
    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="ks-wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="ks-navbar-menu">
                <form class="ks-search-form">
                    <a class="ks-search-open" href="#">
                        <span class="la la-search"></span>
                    </a>
                    <div class="ks-wrapper">
                        <div class="input-icon icon-right icon icon-lg icon-color-primary">
                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search...">
                            <span class="icon-addon">
                                <span class="la la-search ks-icon"></span>
                            </span>
                        </div>
                        <a class="ks-search-close" href="#">
                            <span class="la la-close"></span>
                        </a>
                    </div>
                </form>
                <a class="nav-item nav-link" href="#">Dashboard</a>
                
                <div class="nav-item nav-link ks-btn-action">
                    
                </div>
            </div>
            <!-- END NAVBAR MENU -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="ks-navbar-actions">
                <!-- BEGIN NAVBAR MESSAGES -->
                <!--div class="nav-item dropdown ks-messages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-envelope ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">3</span>
                        </span>
                        <span class="ks-text">Messages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <section class="ks-tabs-actions">
                            <a href="#"><i class="la la-plus ks-icon"></i></a>
                            <a href="#"><i class="la la-search ks-icon"></i></a>
                        </section>
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#ks-navbar-messages-inbox" role="tab">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-sent" role="tab">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-archive" role="tab">Archive</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-messages-tab active" id="ks-navbar-messages-inbox" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="img/prueba/avatars/avatar-1.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="img/prueba/avatars/avatar-5.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="img/prueba/avatars/placeholders/ava-36.png" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="img/prueba/avatars/avatar-4.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="ks-view-all">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-sent" role="tabpanel">
                                There are no messages.
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-archive" role="tabpanel">
                                There are no messages.
                            </div>
                        </div>
                    </div>
                </div-->
                <!-- END NAVBAR MESSAGES -->

                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <!--div class="nav-item dropdown ks-notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-bell ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">7</span>
                        </span>
                        <span class="ks-text">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-notification">
                                        <div class="ks-avatar">
                                            <img src="img/prueba/avatars/avatar-3.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter <span class="ks-description">has uploaded 1 file</span></div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-default">
                                                <span class="la la-briefcase ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">New project created</div>
                                            <div class="ks-text">Dashboard UI</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-error">
                                                <span class="la la-times-circle ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">File upload error</div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">10 minutes ago</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="ks-view-all">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-activity" role="tabpanel">
                                There are no activities.
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-comments" role="tabpanel">
                                There are no comments.
                            </div>
                        </div>
                    </div>
                </div-->
                <!-- END NAVBAR NOTIFICATIONS -->

                <!-- BEGIN NAVBAR USER -->
                <div class="nav-item dropdown ks-user">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-avatar">
                            <img src="/img/usuarios/{{ auth()->user()->foto }}" width="36" height="36">
                        </span>
                        <span class="ks-info">
                            <span class="ks-name">Robert Dean</span>
                            <span class="ks-description">Premium User</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <a class="dropdown-item" href="#">
                            <span class="la la-user ks-icon"></span>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-wrench ks-icon" aria-hidden="true"></span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-question-circle ks-icon" aria-hidden="true"></span>
                            <span>Help</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-sign-out ks-icon" aria-hidden="true"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
                <!-- END NAVBAR USER -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-ellipsis-h ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-th ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->
<div class="ks-page-container">
    
<!-- BEGIN DEFAULT SIDEBAR -->
@include('administrador.navAdmin')
<!-- END DEFAULT SIDEBAR -->

@yield('content')

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/popper/popper.min.js"></script>
<script src="/libs/responsejs/response.min.js"></script>
<script src="/libs/loading-overlay/loadingoverlay.min.js"></script>
<script src="/libs/tether/js/tether.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/libs/jscrollpane/jquery.jscrollpane.min.js"></script>
<script src="/libs/jscrollpane/jquery.mousewheel.js"></script>
<script src="/libs/flexibility/flexibility.js"></script>
<script src="/libs/noty/noty.min.js"></script>
<script src="/libs/velocity/velocity.min.js"></script>

<!-- DATA TABLES-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/js/admin/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="/libs/jquery-form-validator/jquery.form-validator.min.js"></script>
<script src="/libs/jquery-mask/jquery.mask.min.js"></script>
<script type="application/javascript">
    (function ($) {
        $(document).ready(function() {
            $.validate({
                modules : 'location, date, security, file, validate_strength',
                onModulesLoaded : function() {
    
                }
            });
            $('#ks-maxlength-area').restrictLength($('#ks-maxlength-label'));
        });
    })(jQuery);
    </script>
<script type="application/javascript">
(function ($) {
    $('.ks-date-mask-input').mask('00/00/0000');
    $('.ks-time-mask-input').mask('00:00:00');
    $('.ks-datetime-mask-input').mask('00/00/0000 00:00:00');
    $('.ks-zip-code-mask-input').mask('00000-000');
    $('.ks-placeholder-mask-input').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.ks-money-mask-input').mask('000.000.000.000.000,00', {reverse: true});
    $('.ks-clear-if-not-match-mask-input').mask("00/00/0000", {clearIfNotMatch: true});
    $('.ks-fallback-digit-mask-input').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });

    $('.ks-phone-mask-input').mask('0000-0000');
    $('.ks-phone-with-code-area-mask-input').mask('(00) 0000-0000');
    $('.ks-us-phone-mask-input').mask('(000) 000-0000');
    $('.ks-mixed-type-mask-input').mask('AAA 000-S0S');
    $('.ks-cpf-mask-input').mask('000.000.000-00', {reverse: true});
    $('.ks-cnpj-mask-input').mask('00.000.000/0000-00', {reverse: true});
    $('.ks-ip-address-mask-input').mask('099.099.099.099');
    $('.ks-select-on-focus-mask-input').mask("00/00/0000", {selectOnFocus: true});

    var options =  {
        onKeyPress: function(cep, e, field, options) {
        var masks = ['00000-000', '0-00-00-00'];
        mask = (cep.length>7) ? masks[1] : masks[0];

        $('.ks-crazy-zip-code-mask-input').mask(mask, options);
    }};

    $('.ks-crazy-zip-code-mask-input').mask('00000-000', options);

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.ks-aso-paulo-celphones-mask-input').mask(SPMaskBehavior, spOptions);
})(jQuery);
</script>
<script type="application/javascript">
    $(document).ready(function() {
     // Setup - add a text input to each footer cell
     $('#example tfoot th').each( function () {
         var title = $(this).text();
         $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
     } );
  
     // DataTable
     var table = $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                text: 'Guardar PDF',
                customize: function ( doc ) {
                    doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 12 ],
                        alignment: 'center',
                        image: 'data:image/png;base64,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'
                    } );
                }
            }
        ]
    } );
     //var data = table.buttons.exportData(); 
     
     // Apply the search
     table.columns().every( function () {
         var that = this;
         $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                .search( this.value )
                .draw();
            }
        } );
    } );
 } );
 </script>
</body>
</html>