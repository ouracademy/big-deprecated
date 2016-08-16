import { Component, Input } from "@angular/core";

@Component({
  selector: "slider",
  templateUrl: "angular2app/app/shared/slider.component.html"
})
export class SliderComponent {
  @Input()
  title: string;
  @Input()
  imageURL: string;
  @Input()
  message: string;
}
