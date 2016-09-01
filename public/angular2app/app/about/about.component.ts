import { Component } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "about",
  templateUrl: "about.component.html",
  styleUrls: ["about.component.css"]
})
export class AboutComponent {
  slider = {
    title: "Nosotros",
    image: "img/about/team.jpg",
    message: "Un equipo dedicado a formar grandes personas"
  };
}
