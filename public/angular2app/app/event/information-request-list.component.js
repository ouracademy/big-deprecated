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
var event_service_1 = require('./event.service');
var InformationRequestListComponent = (function () {
    function InformationRequestListComponent(eventService) {
        this.eventService = eventService;
    }
    InformationRequestListComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.eventService.getInformationRequests(1).then(function (x) { return _this.informationRequests = x; });
    };
    InformationRequestListComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: 'information-request-list',
            templateUrl: 'information-request-list.component.html'
        }), 
        __metadata('design:paramtypes', [event_service_1.EventService])
    ], InformationRequestListComponent);
    return InformationRequestListComponent;
}());
exports.InformationRequestListComponent = InformationRequestListComponent;
//# sourceMappingURL=information-request-list.component.js.map