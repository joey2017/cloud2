<?php

namespace Yeelight\Presenters;

use Yeelight\Transformers\AdminUserTransformer;

/**
 * Class AdminUserPresenter
 *
 * @category Yeelight
 *
 * @package Yeelight\Presenters
 *
 * @author Sheldon Lee <xdlee110@gmail.com>
 *
 * @license https://opensource.org/licenses/MIT MIT
 *
 * @link https://www.yeelight.com
 */
class AdminUserPresenter extends BasePresenter
{
    /**
     * Transformer.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AdminUserTransformer();
    }
}
