import { Component } from "@angular/core";
import { Slider } from '../shared/slider/slider';

@Component({
  moduleId: module.id,
  selector: "about",
  templateUrl: "about.component.html",
  styleUrls: ["about.component.css"]
})
export class AboutComponent {
  slider: Slider = {
    title: "Nosotros",
    imageURL: "img/about/team.jpg",
    message: "Un equipo dedicado a formar grandes personas"
  };
}
