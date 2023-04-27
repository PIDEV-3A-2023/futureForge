<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/abonnement' => [[['_route' => 'admin_abonnement_index', '_controller' => 'App\\Controller\\AbonnementAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abonnement' => [[['_route' => 'app_abonnement_index', '_controller' => 'App\\Controller\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/avis' => [[['_route' => 'admin_avis_index', '_controller' => 'App\\Controller\\AvisAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/avis/new' => [[['_route' => 'admin_avis_new', '_controller' => 'App\\Controller\\AvisAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/offre2' => [[['_route' => 'admin_offre2_index', '_controller' => 'App\\Controller\\Offre2AdminController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/offre2/new' => [[['_route' => 'admin_offre2_new', '_controller' => 'App\\Controller\\Offre2AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre2' => [[['_route' => 'app_offre2_index', '_controller' => 'App\\Controller\\Offre2Controller::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre2/mensuelle' => [[['_route' => 'app_offre2_men', '_controller' => 'App\\Controller\\Offre2Controller::men'], null, ['GET' => 0], null, false, false, null]],
        '/offre2/semestrielle' => [[['_route' => 'app_offre2_sem', '_controller' => 'App\\Controller\\Offre2Controller::sem'], null, ['GET' => 0], null, false, false, null]],
        '/offre2/annuelle' => [[['_route' => 'app_offre2_ann', '_controller' => 'App\\Controller\\Offre2Controller::ann'], null, ['GET' => 0], null, false, false, null]],
        '/offre2/new' => [[['_route' => 'app_offre2_new', '_controller' => 'App\\Controller\\Offre2Controller::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/offre' => [[['_route' => 'admin_offre_index', '_controller' => 'App\\Controller\\OffreAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/search' => [[['_route' => 'offre_search', '_controller' => 'App\\Controller\\OffreController::search'], null, null, null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservation/bus/search' => [[['_route' => 'reservation_bus_search', '_controller' => 'App\\Controller\\ReservationBusAdminController::search'], null, null, null, false, false, null]],
        '/admin/reservation/bus' => [[['_route' => 'admin_reservation_bus_index', '_controller' => 'App\\Controller\\ReservationBusAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reservation/bus/new' => [[['_route' => 'admin_reservation_bus_new', '_controller' => 'App\\Controller\\ReservationBusAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/bus' => [[['_route' => 'app_reservation_bus_index', '_controller' => 'App\\Controller\\ReservationBusController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/bus/new' => [[['_route' => 'app_reservation_bus_new', '_controller' => 'App\\Controller\\ReservationBusController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservation/covoiturage/search' => [[['_route' => 'reservation_covoiturage_search', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::search'], null, null, null, false, false, null]],
        '/admin/reservation/covoiturage' => [[['_route' => 'admin_reservation_covoiturage_index', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reservation/covoiturage/new' => [[['_route' => 'admin_reservation_covoiturage_new', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/covoiturage' => [[['_route' => 'app_reservation_covoiturage_index', '_controller' => 'App\\Controller\\ReservationCovoiturageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/covoiturage/new' => [[['_route' => 'app_reservation_covoiturage_new', '_controller' => 'App\\Controller\\ReservationCovoiturageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|a(?'
                            .'|bonnement/(?'
                                .'|([^/]++)(*:45)'
                                .'|printa(?'
                                    .'|bonnement/([^/]++)(*:79)'
                                    .'|llabonnements/([^/]++)(*:108)'
                                .')'
                            .')'
                            .'|vis/([^/]++)(?'
                                .'|(*:133)'
                                .'|/edit(*:146)'
                                .'|(*:154)'
                            .')'
                        .')'
                        .'|offre(?'
                            .'|2/([^/]++)(?'
                                .'|(*:185)'
                                .'|/edit(*:198)'
                                .'|(*:206)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:227)'
                            .')'
                        .')'
                        .'|reservation/(?'
                            .'|bus/([^/]++)(?'
                                .'|(*:267)'
                                .'|/edit(*:280)'
                                .'|(*:288)'
                            .')'
                            .'|covoiturage/([^/]++)(?'
                                .'|(*:320)'
                                .'|/edit(*:333)'
                                .'|(*:341)'
                            .')'
                        .')'
                    .')'
                    .'|bonnement/(?'
                        .'|new/([^/]++)(*:377)'
                        .'|([^/]++)(?'
                            .'|(*:396)'
                            .'|/edit(*:409)'
                            .'|(*:417)'
                        .')'
                    .')'
                    .'|vis/([^/]++)(?'
                        .'|(*:442)'
                        .'|/edit(*:455)'
                        .'|(*:463)'
                    .')'
                .')'
                .'|/offre(?'
                    .'|2/([^/]++)(?'
                        .'|(*:495)'
                        .'|/edit(*:508)'
                        .'|(*:516)'
                    .')'
                    .'|/([^/]++)(?'
                        .'|(*:537)'
                        .'|/(?'
                            .'|edit(*:553)'
                            .'|avis/add(*:569)'
                        .')'
                        .'|(*:578)'
                    .')'
                .')'
                .'|/reservation/(?'
                    .'|bus/([^/]++)(?'
                        .'|(*:619)'
                        .'|/edit(*:632)'
                        .'|(*:640)'
                    .')'
                    .'|covoiturage/([^/]++)(?'
                        .'|(*:672)'
                        .'|/edit(*:685)'
                        .'|(*:693)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:731)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:767)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'admin_abonnement_show', '_controller' => 'App\\Controller\\AbonnementAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        79 => [[['_route' => 'print_abonnement', '_controller' => 'App\\Controller\\AbonnementAdminController::exportAbonnementPDF'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'print_abonnements', '_controller' => 'App\\Controller\\AbonnementAdminController::exportAllAbonnementsPDF'], ['id'], null, null, false, true, null]],
        133 => [[['_route' => 'admin_avis_show', '_controller' => 'App\\Controller\\AvisAdminController::show'], ['idAvis'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'admin_avis_edit', '_controller' => 'App\\Controller\\AvisAdminController::edit'], ['idAvis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        154 => [[['_route' => 'admin_avis_delete', '_controller' => 'App\\Controller\\AvisAdminController::delete'], ['idAvis'], ['POST' => 0], null, false, true, null]],
        185 => [[['_route' => 'admin_offre2_show', '_controller' => 'App\\Controller\\Offre2AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'admin_offre2_edit', '_controller' => 'App\\Controller\\Offre2AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'admin_offre2_delete', '_controller' => 'App\\Controller\\Offre2AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        227 => [
            [['_route' => 'admin_offre_show', '_controller' => 'App\\Controller\\OffreAdminController::show'], ['idOffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'admin_offre_delete', '_controller' => 'App\\Controller\\OffreAdminController::delete'], ['idOffre'], ['POST' => 0], null, false, true, null],
        ],
        267 => [[['_route' => 'admin_reservation_bus_show', '_controller' => 'App\\Controller\\ReservationBusAdminController::show'], ['idReservationBus'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'admin_reservation_bus_edit', '_controller' => 'App\\Controller\\ReservationBusAdminController::edit'], ['idReservationBus'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'admin_reservation_bus_delete', '_controller' => 'App\\Controller\\ReservationBusAdminController::delete'], ['idReservationBus'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'admin_reservation_covoiturage_show', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::show'], ['idReservation'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'admin_reservation_covoiturage_edit', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::edit'], ['idReservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'admin_reservation_covoiturage_delete', '_controller' => 'App\\Controller\\ReservationCovoiturageAdminController::delete'], ['idReservation'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_abonnement_new', '_controller' => 'App\\Controller\\AbonnementController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        396 => [[['_route' => 'app_abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        409 => [[['_route' => 'app_abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        417 => [[['_route' => 'app_abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['idAvis'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['idAvis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['idAvis'], ['POST' => 0], null, false, true, null]],
        495 => [[['_route' => 'app_offre2_show', '_controller' => 'App\\Controller\\Offre2Controller::show'], ['id'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_offre2_edit', '_controller' => 'App\\Controller\\Offre2Controller::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        516 => [[['_route' => 'app_offre2_delete', '_controller' => 'App\\Controller\\Offre2Controller::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idOffre'], ['GET' => 0], null, false, true, null]],
        553 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idOffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        569 => [[['_route' => 'app_offre_avis', '_controller' => 'App\\Controller\\OffreController::addAvis'], ['idOffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        578 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idOffre'], ['POST' => 0], null, false, true, null]],
        619 => [[['_route' => 'app_reservation_bus_show', '_controller' => 'App\\Controller\\ReservationBusController::show'], ['idReservationBus'], ['GET' => 0], null, false, true, null]],
        632 => [[['_route' => 'app_reservation_bus_edit', '_controller' => 'App\\Controller\\ReservationBusController::edit'], ['idReservationBus'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        640 => [[['_route' => 'app_reservation_bus_delete', '_controller' => 'App\\Controller\\ReservationBusController::delete'], ['idReservationBus'], ['POST' => 0], null, false, true, null]],
        672 => [[['_route' => 'app_reservation_covoiturage_show', '_controller' => 'App\\Controller\\ReservationCovoiturageController::show'], ['idReservation'], ['GET' => 0], null, false, true, null]],
        685 => [[['_route' => 'app_reservation_covoiturage_edit', '_controller' => 'App\\Controller\\ReservationCovoiturageController::edit'], ['idReservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        693 => [[['_route' => 'app_reservation_covoiturage_delete', '_controller' => 'App\\Controller\\ReservationCovoiturageController::delete'], ['idReservation'], ['POST' => 0], null, false, true, null]],
        731 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        767 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
