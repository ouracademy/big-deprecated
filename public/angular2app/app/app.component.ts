import { Component } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "app",
  templateUrl: "app.component.html"
})
export class AppComponent {
  onActivate(e) {
    window.scrollTo(0, 0);
  }

  scrollUp(){
    window.scrollTo(0, 0);
  }
}
