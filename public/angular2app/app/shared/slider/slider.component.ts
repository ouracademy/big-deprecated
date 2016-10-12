import { Component, Input } from "@angular/core";
import { Slider } from './slider';

@Component({
  moduleId: module.id,
  selector: "slider",
  templateUrl: "slider.component.html",
  styles: [`
    .btn {
        font-size: 20px;
        color: white;
        background-color: rgba(255, 255, 255, 0);
        border: 2px solid white;
    }
  `]
})
export class SliderComponent {
  @Input()
  slider: Slider;
}