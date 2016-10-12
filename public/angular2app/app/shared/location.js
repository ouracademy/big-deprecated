"use strict";
var Location = (function () {
    function Location(name, point) {
        this.name = name;
        this._point = point;
    }
    Object.defineProperty(Location.prototype, "point", {
        set: function (point) {
            this._point = point;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Location.prototype, "latitude", {
        get: function () {
            return this._point.latitude;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Location.prototype, "longitude", {
        get: function () {
            return this._point.longitude;
        },
        enumerable: true,
        configurable: true
    });
    return Location;
}());
exports.Location = Location;
//# sourceMappingURL=location.js.map