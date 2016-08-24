import { Component } from "@angular/core";

@Component({
  selector: "app",
  templateUrl: "angular2app/app/app.component.html"
})
export class AppComponent {
  onActivate(e) {
    window.scrollTo(0, 0);
  }

  // onScroll(event) {
  //   if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
  //       console.log("Un boton");
  //       //document.getElementById("myImg").className = "slideUp";
  //   }
  // }

  scrollUp(){
    window.scrollTo(0, 0);
  }
}
