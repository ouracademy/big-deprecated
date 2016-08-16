import { Component } from "@angular/core";

@Component({
  selector: "about",
  templateUrl: "angular2app/app/about/about.component.html",
  styleUrls: ["angular2app/app/about/about.component.css"]
})
export class AboutComponent {
  slider = {
    title: "Nosotros",
    image: "img/about/team.jpg",
    message: "Un equipo dedicado a formar grandes personas"
  };
}
