<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disease Entity
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $lead
 * @property int $staff_id
 * @property bool $delflag
 * @property string $delreazon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Question[] $questions
 */
class Disease extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
