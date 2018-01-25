<?php
/**
 * Created by PhpStorm.
 * User: saadia
 * Date: 24/01/2018
 * Time: 13:10
 */

namespace Drupal\hello_8\Plugin\Block;


use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 * id = "helloConfig",
 * admin_label = @Translation("Hello config block"),
 * )
 */

class BlockWithConfig extends BlockBase implements  BlockPluginInterface
{


    /**
     * Builds and returns the renderable array for this block plugin.
     *
     * If a block should not be rendered because it has no content, then this
     * method must also ensure to return no content: it must then only return an
     * empty array, or an empty array with #cache set (with cacheability metadata
     * indicating the circumstances for it being empty).
     *
     * @return array
     *   A renderable array representing the content of the block.
     *
     * @see \Drupal\block\BlockViewBuilder
     */

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        // TODO: Implement build() method.

        return array(
            '#markup' => $this->t('Hello, World'),
        );
    }
    public function blockForm($form, FormStateInterface $form_state)
    {
        $form=parent::blockForm($form, $form_state);
        $config = $this->getConfiguration();
        $form['hello_block_settings'] = array (
            '#type' => 'textfield',
            '#title' => $this->t('Who'),
            '#description' => $this->t('Who do you want to say hello to?'),
            '#default_value' => isset($config['hello_block_settings']) ? $config['hello_block_settings'] : ''
        );
        return $form;    }
}