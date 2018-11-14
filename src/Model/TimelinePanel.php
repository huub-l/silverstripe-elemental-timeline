<?php

namespace Huubl\Elements\Timeline\Model;

use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use Dynamic\BaseObject\Model\BaseElementObject;
use Huubl\Elements\Timeline\Elements\ElementTimeline;
use Sheadawson\Linkable\Forms\LinkField;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;
use SilverStripe\Security\Permission;

/**
 * Class TimelinePanel
 * @package Huubl\Elements\Timeline\Model
 *
 * @property int $Sort
 *
 * @property int TimelineID
 * @method ElementTimeline Timeline()
 */
class TimelinePanel extends BaseElementObject
{
    /**
     * @var string
     */
    private static $singular_name = 'Timeline Panel';

    /**
     * @var string
     */
    private static $plural_name = 'Timeline Panels';

    /**
     * @var string
     */
    private static $description = 'A panel for a Timeline widget';

    /**
     * @var array
     */
    private static $db = [
        'Sort' => 'Int',
    ];
    /**
     * @var array
     */
    private static $has_one = [
        'Timeline' => ElementTimeline::class,
    ];

    /**
     * @var array Related objects to be published recursively on TimelinePanel::publishRecursively()
     */
    private static $owns = [
        'Image',
    ];

    /**
     * @var array Show the panel $Title by default
     */
    private static $defaults = [
        'ShowTitle' => true,
    ];

    /**
     * @var string
     */
    private static $default_sort = 'Sort';

    /**
     * @var string Database table name, default's to the fully qualified name
     */
    private static $table_name = 'TimelinePanel';

    /**
     * @return FieldList
     *
     * @throws \Exception
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {
            /** @var FieldList $fields */
            $fields->removeByName([
                'Sort',
                'TimelineID',
            ]);

            $fields->dataFieldByName('Image')
                ->setFolderName('Uploads/Elements/Timelines');
        });

        return parent::getCMSFields();
    }

    /**
     * @return null
     */
    public function getPage()
    {
        $page = null;

        if ($this->TimelineID) {
            if ($this->Timeline()->hasMethod('getPage')) {
                $page = $this->Timeline()->getPage();
            }
        }

        return $page;
    }
}
