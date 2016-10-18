import { Component } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "sponsors",
  templateUrl: "sponsors.component.html",
  styles: [`
      #hakan {
        height:112px;
      }

      .sponsor {
          padding-top:20px;
      }
  `]
})
export class SponsorsComponent { }
