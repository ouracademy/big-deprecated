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
var core_1 = require("@angular/core");
var SliderComponent = (function () {
    function SliderComponent() {
    }
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Object)
    ], SliderComponent.prototype, "slider", void 0);
    SliderComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: "slider",
            templateUrl: "slider.component.html",
            styles: ["\n    .btn {\n        font-size: 20px;\n        color: white;\n        background-color: rgba(255, 255, 255, 0);\n        border: 2px solid white;\n    }\n  "]
        }), 
        __metadata('design:paramtypes', [])
    ], SliderComponent);
    return SliderComponent;
}());
exports.SliderComponent = SliderComponent;
//# sourceMappingURL=slider.component.js.map