import $  from 'jquery';

import { lottie } from './lottie';

import { header } from './template-parts/header/header';

//animations
import { appearence } from './animations/appearence';

//blocks

import { teachersSlider } from './template-parts/blocks/content-image-slider';
header();
lottie();

//animations
appearence();

//blocks
contentImageSlider();

