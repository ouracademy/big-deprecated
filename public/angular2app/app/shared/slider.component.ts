import { Component, Input } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "slider",
  templateUrl: "slider.component.html"
})
export class SliderComponent {
  @Input()
  title: string;
  @Input()
  imageURL: string;
  @Input()
  message: string;
}
