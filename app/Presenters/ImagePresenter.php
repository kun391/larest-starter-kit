<?php

namespace App\Presenters;

use App\Transformers\ImageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ImagePresenter.
 */
class ImagePresenter extends FractalPresenter
{
    protected $resourceKeyItem = 'Image';
    protected $resourceKeyCollection = 'Image';

    /**
     * Transformer.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ImageTransformer();
    }
}
