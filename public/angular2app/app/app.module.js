"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var platform_browser_1 = require('@angular/platform-browser');
var http_1 = require('@angular/http');
var forms_1 = require('@angular/forms');
var app_component_1 = require('./app.component');
var app_routing_1 = require('./app.routing');
var welcome_component_1 = require('./welcome/welcome.component');
var about_component_1 = require('./about/about.component');
var contact_component_1 = require('./contact/contact.component');
var contact_service_1 = require('./contact/contact.service');
var event_list_component_1 = require('./event/event-list.component');
var event_detail_component_1 = require('./event/event-detail.component');
var information_request_list_component_1 = require('./event/information-request-list.component');
var event_service_1 = require('./event/event.service');
var participant_register_component_1 = require('./participant/participant-register.component');
var sponsors_component_1 = require('./shared/sponsors.component');
var slider_component_1 = require('./shared/slider/slider.component');
var login_component_1 = require('./auth/login.component');
var config_1 = require('./config');
var ng2_page_scroll_1 = require('ng2-page-scroll');
var core_2 = require('angular2-google-maps/core');
var ng2_bootstrap_1 = require('ng2-bootstrap/ng2-bootstrap');
var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            imports: [
                platform_browser_1.BrowserModule,
                app_routing_1.routing,
                http_1.HttpModule,
                forms_1.ReactiveFormsModule,
                ng2_page_scroll_1.Ng2PageScrollModule,
                ng2_bootstrap_1.CarouselModule,
                ng2_bootstrap_1.ModalModule,
                ng2_bootstrap_1.CollapseModule,
                ng2_bootstrap_1.AlertModule,
                core_2.AgmCoreModule.forRoot({
                    apiKey: config_1.config.googleMapAPIKey
                }),
            ],
            declarations: [
                app_component_1.AppComponent,
                welcome_component_1.WelcomeComponent,
                about_component_1.AboutComponent,
                event_list_component_1.EventListComponent,
                event_detail_component_1.EventDetailComponent,
                information_request_list_component_1.InformationRequestListComponent,
                participant_register_component_1.ParticipantRegisterComponent,
                contact_component_1.ContactComponent,
                sponsors_component_1.SponsorsComponent,
                slider_component_1.SliderComponent,
                login_component_1.LoginComponent
            ],
            providers: [
                contact_service_1.ContactService,
                event_service_1.EventService,
                app_routing_1.appRoutingProviders
            ],
            bootstrap: [app_component_1.AppComponent]
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map