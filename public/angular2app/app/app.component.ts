import { Component } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "app",
  templateUrl: "app.component.html"
})
export class AppComponent {
  //TODO should be removed on Angular RC7 or final
  onActivate(e) {
    window.scrollTo(0, 0);
  }

  scrollUp(){
    window.scrollTo(0, 0);
  }
}
