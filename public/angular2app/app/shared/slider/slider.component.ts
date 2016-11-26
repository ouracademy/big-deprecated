import { Component, Input } from '@angular/core';
import { Slider } from './slider';

@Component({
  moduleId: module.id,
  selector: 'slider',
  templateUrl: 'slider.component.html'
})
export class SliderComponent {
  @Input()
  slider: Slider;
}