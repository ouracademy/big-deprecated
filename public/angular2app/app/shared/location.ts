export class Location {
  private _point: Point;
  constructor(public name: string, point?: Point) {
    this._point = point;
  }

  set point(point: Point) {
    this._point = point;
  }

  get latitude() {
    return this._point.latitude;
  }

  get longitude() {
    return this._point.longitude;
  }
}

interface Point {
  latitude: number;
  longitude: number;
}