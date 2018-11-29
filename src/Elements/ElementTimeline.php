<?php

namespace Huubl\Elements\Timeline\Elements;

use DNADesign\Elemental\Models\BaseElement;
use Huubl\Elements\Timeline\Model\TimelinePanel;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldAddExistingAutocompleter;
use SilverStripe\Forms\GridField\GridFieldDeleteAction;
use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\ORM\FieldType\DBHTMLText;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class ElementTimeline
 * @package Huubl\Elements\Timeline\Elements
 *
 * @property string $Content
 *
 * @method \SilverStripe\ORM\HasManyList Panels()
 */
class ElementTimeline extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'timeline-icon';

    /**
     * @var string
     */
    private static $singular_name = 'Timeline';

    /**
     * @var string
     */
    private static $plural_name = 'Timelines';

    /**
     * @var string
     */
    private static $table_name = 'ElementTimeline';

    /**
     * @var string
     */
    private static $description = 'A collapsing list of content';

    /**
     * @var array
     */
    private static $db = [
        'Content' => 'HTMLText',
    ];

    /**
     * @var array
     */
    private static $has_many = array(
        'Panels' => TimelinePanel::class,
    );

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {
            /* @var FieldList $fields */
            $fields->removeByName(array(
                'Sort',
            ));

            $fields->dataFieldByName('Content')
                ->setRows(8);

            if ($this->ID) {
                /** @var GridField $panels */
                $panels = $fields->dataFieldByName('Panels');
                $panels->setTitle(_t(__CLASS__.'.Panels', 'Panels'));

                $config = $panels->getConfig();
                $config->addComponent(new GridFieldOrderableRows('Sort'));
                $config->removeComponentsByType(GridFieldAddExistingAutocompleter::class);
                $config->removeComponentsByType(GridFieldDeleteAction::class);
            }
        });

        return parent::getCMSFields();
    }

    /**
     * @return DBHTMLText
     */
    public function ElementSummary()
    {
        return DBField::create_field('HTMLText', $this->Content)->Summary(20);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__.'.BlockType', 'Timeline');
    }
}
