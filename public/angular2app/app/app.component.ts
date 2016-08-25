import { Component } from "@angular/core";

@Component({
  selector: "app",
  templateUrl: "angular2app/app/app.component.html",
  styleUrls: ["angular2app/app/absolute-background.css"]
})
export class AppComponent {
  onActivate(e) {
    window.scrollTo(0, 0);
  }

  scrollUp(){
    window.scrollTo(0, 0);
  }
}
