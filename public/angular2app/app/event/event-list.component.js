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
var EventListComponent = (function () {
    function EventListComponent() {
        this.slider = {
            message: "Próximamente grandes eventos",
            image: "img/events/entrepreneur.jpg",
            title: "Eventos"
        };
        this.events = new Array({
            name: "Un evento",
            timePeriod: {
                start: new Date(),
                end: new Date()
            }
        });
    }
    EventListComponent = __decorate([
        core_1.Component({
            selector: 'event-list',
            templateUrl: 'angular2app/app/event/event-list.component.html',
            styles: ["\n        .jumbotron{\n            margin-bottom:0px;\n        }\n    "]
        }), 
        __metadata('design:paramtypes', [])
    ], EventListComponent);
    return EventListComponent;
}());
exports.EventListComponent = EventListComponent;
//# sourceMappingURL=event-list.component.js.map