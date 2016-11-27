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
var http_1 = require('@angular/http');
require('rxjs/add/operator/toPromise');
var EventService = (function () {
    function EventService(http) {
        this.http = http;
        this.apiURL = '/event'; // URL to web apiURL
        this.headers = new http_1.Headers({ 'Content-Type': 'application/json' });
    }
    EventService.prototype.getEvents = function () {
        return this.http.get(this.apiURL)
            .toPromise()
            .then(function (res) { return res.json().data; })
            .catch(this.handleError);
    };
    EventService.prototype.handleError = function (error) {
        console.error('An error occurred', error);
        //return Promise.reject(error.message || error);
        return Promise.reject(error.json());
    };
    EventService.prototype.getEvent = function (slug) {
        var url = this.apiURL + "/" + slug;
        return this.http.get(url)
            .toPromise()
            .then(function (res) { return res.json().data; })
            .catch(this.handleError);
    };
    EventService.prototype.registerInformationRequest = function (eventId, input) {
        var url = this.apiURL + "/" + eventId + "/information-request";
        return this.http
            .post(url, JSON.stringify(input), { headers: this.headers })
            .toPromise()
            .then(function (res) { return res.json().data; })
            .catch(this.handleError);
    };
    EventService.prototype.getInformationRequests = function (eventId) {
        var url = this.apiURL + "/" + eventId + "/information-request";
        return this.http
            .get(url)
            .toPromise()
            .then(function (res) { return res.json().data; })
            .catch(this.handleError);
    };
    EventService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], EventService);
    return EventService;
}());
exports.EventService = EventService;
//# sourceMappingURL=event.service.js.map