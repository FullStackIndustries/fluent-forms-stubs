<?php

namespace FluentForm\App\Services\FormBuilder;

class EditorShortCode
{
    public static function getGeneralShortCodes()
    {
    }
    public static function getFormShortCodes($form)
    {
    }
    public static function getFormLabelShortCodes($form)
    {
    }
    public static function getSubmissionShortcodes($form = false)
    {
    }
    public static function getPaymentShortcodes($form)
    {
    }
    public static function getShortCodes($form)
    {
    }
    public static function parse($string, $data, ?callable $arrayFormatter = null)
    {
    }
    public static function parseArray($string, $data, $arrayFormatter)
    {
    }
    public static function parseString($string, $data, ?callable $arrayFormatter = null)
    {
    }
    protected static function getForm($form)
    {
    }
}
class EditorShortcodeParser
{
    /**
     * Filter dynamic shortcodes in input value
     *
     * @param string $value
     *
     * @return string
     */
    public static function filter($value, $form)
    {
    }
    /**
     * Parse request query param.
     *
     * @param string $value
     * @param \stdClass $form
     *
     * @return string
     */
    public static function parseRequestParam($value)
    {
    }
    /**
     * Parse the curly braced shortcode into array
     *
     * @param string $value
     *
     * @return mixed
     */
    public static function parseValue($value)
    {
    }
    /**
     * Parse request query param.
     *
     * @param string $value
     * @param \stdClass $form
     *
     * @return string
     */
    public static function parseQueryParam($value)
    {
    }
    /**
     * Generate random a string with prefix
     *
     * @param $value
     *
     * @return string
     */
    public static function parseRandomString($value)
    {
    }
}
class ShortCodeParser
{
    protected static $form = null;
    protected static $entry = null;
    protected static $browser = null;
    protected static $formFields = null;
    protected static $provider = null;
    protected static $store = ['inputs' => null, 'original_inputs' => null, 'user' => null, 'post' => null, 'other' => null, 'submission' => null];
    public static function parse($parsable, $entryId, $data = [], $form = null, $isUrl = false, $providerOrIsHTML = false, $htmlSanitized = false)
    {
    }
    protected static function setDependencies($entry, $data, $form, $provider)
    {
    }
    protected static function setEntry($entry)
    {
    }
    protected static function setdata($data)
    {
    }
    protected static function setForm($form)
    {
    }
    protected static function parseShortCodeFromArray($parsable, $isUrl = false, $provider = false, $htmlSanitized = false)
    {
    }
    protected static function parseShortCodeFromString($parsable, $isUrl = false, $isHtml = false, $htmlSanitized = false)
    {
    }
    protected static function getFormData($key, $isHtml = false)
    {
    }
    protected static function getFormLabelData($key)
    {
    }
    protected static function getUserData($key)
    {
    }
    protected static function getPostData($key)
    {
    }
    protected static function getWPData($key)
    {
    }
    protected static function getSubmissionData($key)
    {
    }
    protected static function getOtherData($key)
    {
    }
    public static function getForm()
    {
    }
    public static function getProvider()
    {
    }
    public static function getEntry()
    {
    }
    protected static function getRequest()
    {
    }
    protected static function getUserAgent()
    {
    }
    public static function getInstance()
    {
    }
    public static function getInputs()
    {
    }
    /**
     * Get the entry UID link for a submission
     *
     * @param object $entry
     * @return string
     */
    protected static function getEntryUidLink($entry)
    {
    }
    public static function resetData()
    {
    }
}
namespace FluentForm\App\Services\FormBuilder\Components;

class BaseComponent
{
    public $app;
    public function __construct($key = '', $title = '', $tags = [], $position = 'advanced')
    {
    }
    /**
     * Build unique ID concatenating form id and name attribute
     *
     * @param array $data $form
     *
     * @return string for id value
     */
    protected function makeElementId($data, $form)
    {
    }
    /**
     * Build attributes for any html element
     *
     * @param array $attributes
     *
     * @return string [Compiled key='value' attributes]
     */
    protected function buildAttributes($attributes, $form = null)
    {
    }
    /**
     * Extract value attribute from attribute list
     *
     * @param array &$element
     *
     * @return string
     */
    protected function extractValueFromAttributes(&$element)
    {
    }
    protected function extractDynamicValues($data, $form)
    {
    }
    /**
     * Determine if the given element has conditions bound
     *
     * @param array $element [Html element being compiled]
     *
     * @return bool
     */
    protected function hasConditions($element)
    {
    }
    /**
     * Generate a unique id for an element
     *
     * @param string $str [preix]
     *
     * @return string [Unique id]
     */
    protected function getUniqueId($str)
    {
    }
    /**
     * Get a default class for each form element wrapper
     * @return string
     */
    protected function getDefaultContainerClass()
    {
    }
    /**
     * Get required class for form element wrapper
     *
     * @param array $rules [Validation rules]
     *
     * @return mixed
     */
    protected function getRequiredClass($rules)
    {
    }
    /**
     * Get asterisk placement for the required form elements
     * @return string
     */
    protected function getAsteriskPlacement($form)
    {
    }
    /**
     * Generate a label for any element
     *
     * @param array $data
     *
     * @return string [label Html element]
     */
    protected function buildElementLabel($data, $form)
    {
    }
    /**
     * Generate html/markup for any element
     *
     * @param string $elMarkup [Predifined partial markup]
     * @param array $data
     * @param stdClass $form   [Form object]
     *
     * @return string [Compiled markup]
     */
    protected function buildElementMarkup($elMarkup, $data, $form)
    {
    }
    /**
     * Generate a help message for any element beside label
     *
     * @param array $data
     *
     * @return string [Html]
     */
    protected function getLabelHelpMessage($data)
    {
    }
    /**
     * Generate a help message for any element beside form element
     *
     * @param array $data
     *
     * @return string [Html]
     */
    protected function getInputHelpMessage($data, $hideClass = '')
    {
    }
    protected function parseEditorSmartCode($text, $form)
    {
    }
    protected function printContent($hook, $html, $data, $form)
    {
    }
    /**
     * A helper method for remove shortcode from aria label
     *
     * @param string $label
     *
     * @return string $label
     */
    protected function removeShortcode($label)
    {
    }
}
namespace FluentForm\App\Services\FormBuilder;

abstract class BaseFieldManager extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    protected $key = '';
    protected $title = '';
    protected $tags = [];
    protected $position = 'advanced';
    public function __construct($key, $title, $tags = [], $position = 'advanced')
    {
    }
    public function register()
    {
    }
    public function pushConditionalSupport($conditonalItems)
    {
    }
    public function pushFormInputType($types)
    {
    }
    public function pushComponent($components)
    {
    }
    public function pushEditorElementPositions($placement_settings)
    {
    }
    public function generalEditorElement()
    {
    }
    public function advancedEditorElement()
    {
    }
    public function getGeneralEditorElements()
    {
    }
    public function getAdvancedEditorElements()
    {
    }
    public function getEditorCustomizationSettings()
    {
    }
    public function pushTags($tags, $form)
    {
    }
    abstract public function getComponent();
    abstract public function render($element, $form);
}
namespace FluentForm\App\Services\FormBuilder\Components;

class SectionBreak extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class DateTime extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
    public function getAvailableDateFormats()
    {
    }
    public function getDateFormatConfigJSON($settings, $form)
    {
    }
    public function getCustomConfig($settings)
    {
    }
}
class Container extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Max columns for container
     *
     * @var integer
     */
    protected $maxColumns = 12;
    /**
     * Container column class
     *
     * @var string
     */
    protected $columnClass = 'ff-t-cell';
    /**
     * Container wrapper class
     *
     * @var string
     */
    protected $wrapperClass = 'ff-t-container ff-column-container';
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Recaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class SubmitButton extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Address extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Wrapper class for address element
     *
     * @var string
     */
    protected $wrapperClass = 'fluent-address';
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class CustomHtml extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Hcaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class SelectCountry extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
    /**
     * Load countt list from file
     *
     * @param array $data
     *
     * @return array
     */
    public function loadCountries($data)
    {
    }
    /**
     * Build options for country list/select
     *
     * @param array $options
     *
     * @return string/html [compiled options]
     */
    protected function buildOptions($options, $defaultValues = [])
    {
    }
    public function getSelectedCountries($keys = [])
    {
    }
}
class CustomSubmitButton extends \FluentForm\App\Services\FormBuilder\BaseFieldManager
{
    public function __construct()
    {
    }
    public function pushFormInputType($types)
    {
    }
    public function getComponent()
    {
    }
    public function pushConditionalSupport($conditonalItems)
    {
    }
    public function getGeneralEditorElements()
    {
    }
    public function getAdvancedEditorElements()
    {
    }
    public function render($data, $form)
    {
    }
}
class Checkable extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class TextArea extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Select extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
    /**
     * Build options for select
     *
     * @param array $options
     *
     * @return string/html [compiled options]
     */
    protected function buildOptions($data, $defaultValues)
    {
    }
}
class Turnstile extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Name extends \FluentForm\App\Services\FormBuilder\Components\Select
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class TabularGrid extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
    public function makeTabularData($data)
    {
    }
    protected function getElementHelpMessage($data, $form)
    {
    }
    protected function setClasses(&$data)
    {
    }
}
class Rating extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class TermsAndConditions extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
class Text extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
{
    /**
     * Compile and echo the html element
     *
     * @param array     $data [element data]
     * @param \stdClass $form [Form Object]
     *
     * @return void
     */
    public function compile($data, $form)
    {
    }
}
namespace FluentForm\App\Services\FormBuilder;

class NotificationParser
{
    protected static $cache = null;
    /**
     * Parse Norifications
     *
     * @param array  $notifications
     * @param int    $insertId
     * @param array  $data
     * @param object $form
     *
     * @return bool $cache
     */
    public static function parse($notifications, $insertId, $data, $form, $cache = true)
    {
    }
    protected static function setRecepient(&$notification, $data)
    {
    }
}
class Components implements \JsonSerializable
{
    /**
     * $items [Components list]
     *
     * @var array
     */
    protected $items = [];
    /**
     * Build the object instance
     *
     * @param array $items
     */
    public function __construct(array $items)
    {
    }
    /**
     * Add a component into list [$items]
     *
     * @param string $name
     * @param array  $component
     * @param string $group     ['general'|'advanced']
     *
     * @return $this
     */
    public function add($name, array $component, $group)
    {
    }
    /**
     * Remove a component from the list [$items]
     *
     * @param string $name
     * @param string $group ['general'|'advanced']
     *
     * @return $this
     */
    public function remove($name, $group)
    {
    }
    /**
     * Modify an existing component
     *
     * @param string  $name
     * @param Closure $callback [to modify the component within]
     * @param string  $group
     *
     * @return $this
     */
    public function update($name, \Closure $callback, $group)
    {
    }
    /**
     * Sort the components in list [$items]
     *
     * @param string $sortBy [key to sort by]
     *
     * @return $this
     */
    public function sort($sortBy = 'index')
    {
    }
    /**
     * Return array [$items]
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Return array [$items]
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
    }
    /**
     * Getter to hook proxy call
     *
     * @return mixed
     */
    public function __get($key)
    {
    }
}
class GroupSetterProxy
{
    /**
     * Element group
     *
     * @var string
     */
    protected $group = null;
    /**
     * Form builder components collection
     *
     * @var \FluentForm\App\Services\FormBuilder\Components
     */
    protected $collection = null;
    public function __construct($collection, $group)
    {
    }
    /**
     * Dynamic call method
     *
     * @param string $method
     * @param array  $params
     *
     * @return \FluentForm\App\Services\FormBuilder\Components
     */
    public function __call($method, $params)
    {
    }
}
namespace FluentForm\App\Services\FormBuilder\Notifications;

class EmailNotificationActions
{
    protected $app = null;
    public function __construct(\FluentForm\Framework\Foundation\Application $app)
    {
    }
    public function register()
    {
    }
    public function notifyOnSubmitPaymentForm($submissionId, $submissionData, $form)
    {
    }
    public function notify($feed, $formData, $entry, $form)
    {
    }
    public function getFormData($submissionId)
    {
    }
    public function getEntry($submissionId)
    {
    }
}
class EmailNotification
{
    /**
     * FluentForm\Framework\Foundation\Application
     *
     * @var $app
     */
    protected $app = null;
    /**
     * Biuld the instance of this class
     *
     * @param \FluentForm\Framework\Foundation\Application $app
     *
     * @return $this
     */
    public function __construct(\FluentForm\Framework\Foundation\Application $app)
    {
    }
    /**
     * Send the email notification
     *
     * @param array     $notification  [Notification settings from form meta]
     * @param array     $submittedData [User submitted form data]
     * @param \StdClass $form          [The form object from database]
     *
     * @return bool
     */
    public function notify($notification, $submittedData, $form, $entryId = false)
    {
    }
    public function getEmailWithTemplate($emailBody, $form, $notification)
    {
    }
    public function getHeaders($notification, $isSendAsPlain = false)
    {
    }
}
namespace FluentForm\App\Services\FormBuilder;

class FormBuilder
{
    /**
     * The Applivcation instance
     *
     * @var \FluentForm\Framework\Foundation\Application
     */
    protected $app = null;
    protected $form = null;
    /**
     * Conditional logic for elements
     *
     * @var array
     */
    public $conditions = [];
    /**
     * Validation rules for elements
     *
     * @var array
     */
    public $validationRules = [];
    public $tabIndex = 1;
    public $fieldLists = [];
    public $containerCounter;
    /**
     * Construct the form builder instance
     *
     * @param \FluentForm\Framework\Foundation\Application $app
     */
    public function __construct($app)
    {
    }
    /**
     * Render the form
     *
     * @param \StdClass $form [Form entry from database]
     *
     * @return mixed
     */
    public function build($form, $extraCssClass = '', $instanceCssClass = '', $atts = [])
    {
    }
    /**
     * @param \stdClass $form
     *
     * @return string form body
     */
    public function buildFormBody($form)
    {
    }
    /**
     * Set unique name/data-name for an element
     *
     * @param array &$item
     *
     * @return void
     */
    protected function setUniqueIdentifier(&$item)
    {
    }
    /**
     * Recursively extract validation rules from a given element
     *
     * @param array $item
     *
     * @return void
     */
    protected function extractValidationRules($item)
    {
    }
    /**
     * Extract validation rules from a given element
     *
     * @param array $item
     *
     * @return void
     */
    protected function extractValidationRule($item, $name = '')
    {
    }
    /**
     * Extract conditional logic from a given element
     *
     * @param array $item
     *
     * @return void
     */
    protected function extractConditionalLogic($item, $itemName = '')
    {
    }
    /**
     * Build attributes for any html element
     *
     * @param array $attributes
     *
     * @return string [Compiled key='value' attributes]
     */
    protected function buildAttributes($attributes, $form = null)
    {
    }
}
namespace FluentForm\App\Models;

class Model extends \FluentForm\Framework\Database\Orm\Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'ID'];
    /**
     * Serialize dates to Y-m-d H:i:s format for backward compatibility.
     *
     * The framework v2 defaults to ISO 8601 (e.g. 2026-03-03T08:54:40+00:00)
     * but existing JS code expects the simple Y-m-d H:i:s format.
     *
     * @param DateTimeInterface $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
    }
    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage()
    {
    }
}
class Subscription extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_subscriptions';
    /**
     * A subscription belongs to a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A subscription belongs to a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
    /**
     * A subscription has many transactions.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function transactions()
    {
    }
    public function getOriginalPlanAttribute($value)
    {
    }
    public function getVendorResponseAttribute($value)
    {
    }
    public function scopeBySubmission($query, $submissionId)
    {
    }
    public function scopeByVendorSubscriptionId($query, $vendorId)
    {
    }
    public function scopeActive($query)
    {
    }
}
class Transaction extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_transactions';
    /**
     * A transaction belongs to a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A transaction belongs to a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
    /**
     * A transaction may belong to a subscription.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function subscription()
    {
    }
    public function scopeBySubmission($query, $submissionId)
    {
    }
    public function scopeByChargeId($query, $chargeId)
    {
    }
    public function scopeOnetime($query)
    {
    }
    public function scopeRefunds($query)
    {
    }
    public function scopeSubscriptionType($query)
    {
    }
    public function scopePaid($query)
    {
    }
}
namespace FluentForm\App\Models\Traits;

trait PredefinedForms
{
    public static function resolvePredefinedForm($attributes = [])
    {
    }
    public static function findPredefinedForm($attributes = [])
    {
    }
    public static function getPredefinedForms()
    {
    }
    public static function getBlankConversationalForm()
    {
    }
}
namespace FluentForm\App\Models;

class OrderItem extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_order_items';
    /**
     * An order item belongs to a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * An order item belongs to a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
    public function scopeBySubmission($query, $submissionId)
    {
    }
    public function scopeProducts($query)
    {
    }
    public function scopeDiscounts($query)
    {
    }
}
class User extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['id', 'name', 'email', 'permalink'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['ID', 'user_email', 'user_pass', 'display_name'];
    /**
     * Get the id of the user.
     *
     * @return bool
     */
    public function getIdAttribute()
    {
    }
    /**
     * Get the name of the user.
     *
     * @return string
     */
    public function getNameAttribute()
    {
    }
    /**
     * Get the email of the user.
     *
     * @return string
     */
    public function getEmailAttribute()
    {
    }
    /**
     * Get the permalink of the user.
     *
     * @return string
     */
    public function getPermalinkAttribute()
    {
    }
}
class Submission extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_submissions';
    /**
     * A submission is owned by a User.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function user()
    {
    }
    /**
     * A submission is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A submission has many meta.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function submissionMeta()
    {
    }
    /**
     * A submission has many logs.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function logs()
    {
    }
    /**
     * A submission has many entry details.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function entryDetails()
    {
    }
    /**
     * A submission has many transactions.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function transactions()
    {
    }
    /**
     * A submission has many subscriptions.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function subscriptions()
    {
    }
    /**
     * A submission has many order items.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function orderItems()
    {
    }
    public function customQuery($attributes = [])
    {
    }
    public function paginateEntries($attributes = [])
    {
    }
    public function findAdjacentSubmission($attributes = [])
    {
    }
    public function countByGroup($formId)
    {
    }
    public function amend($id, $data = [])
    {
    }
    public static function remove($submissionIds)
    {
    }
    public function allSubmissions($attributes = [])
    {
    }
    public function availableForms()
    {
    }
    public static function report($attributes)
    {
    }
}
class Entry extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_submissions';
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * An entry has many meta.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function entryMeta()
    {
    }
    /**
     * An entry has many logs.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function logs()
    {
    }
    /**
     * An entry has many entry details.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function entryDetails()
    {
    }
    public function paginateEntries($attributes = [])
    {
    }
    public function countByGroup($formId)
    {
    }
    public function amend($id, $data = [])
    {
    }
    public static function remove($entryIds)
    {
    }
}
// phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- This class uses custom meta table (fluentform_form_meta), not WordPress postmeta
class FormMeta extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_form_meta';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    public static function prepare($attributes, $predefinedForm)
    {
    }
    public static function retrieve($key, $formId = null, $default = null)
    {
    }
    public static function store(\FluentForm\App\Models\Form $form, $formMeta)
    {
    }
    public static function persist($formId, $metaKey, $metaValue)
    {
    }
    public static function remove($formId, $metaKey)
    {
    }
}
// phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- This class uses custom meta table (fluentform_submission_meta), not WordPress postmeta
class SubmissionMeta extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_submission_meta';
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A formMeta is owned by a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
    public static function retrieve($key, $submissionId = null, $default = null)
    {
    }
    public static function persist($submissionId, $metaKey, $metaValue, $formId = null)
    {
    }
    public static function persistArray($submissionId, $metaKey, $metaValue, $formId = null)
    {
    }
}
class EntryMeta extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_submission_meta';
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A formMeta is owned by an entry.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function entry()
    {
    }
}
class Scheduler extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ff_scheduled_actions';
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A schedule action is owned by a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
}
class EntryDetails extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_entry_details';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
    /**
     * A submission detail is owned by a submission.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function submission()
    {
    }
}
class Log extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_logs';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
}
class FormAnalytics extends \FluentForm\App\Models\Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_form_analytics';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * A formMeta is owned by a form.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
     */
    public function form()
    {
    }
}
class Form extends \FluentForm\App\Models\Model
{
    use \FluentForm\App\Models\Traits\PredefinedForms;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fluentform_forms';
    /**
     * A form has many form meta.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function formMeta()
    {
    }
    /**
     * A form may have one form meta to determine if
     * the form is a regular or conversational one.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasOne
     */
    public function conversationalMeta()
    {
    }
    /**
     * A form has many submissions.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function submissions()
    {
    }
    /**
     * A form has many submission meta.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function submissionMeta()
    {
    }
    /**
     * A form has many entry details.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function entryDetails()
    {
    }
    /**
     * A form has many form analytics.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function formAnalytics()
    {
    }
    /**
     * A form has many logs.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function logs()
    {
    }
    /**
     * A form has many transactions.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function transactions()
    {
    }
    /**
     * A form has many order items.
     *
     * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
     */
    public function orderItems()
    {
    }
    public static function prepare($attributes = [])
    {
    }
    public static function getFormMeta($metaKey, $formId = null)
    {
    }
    public static function getFormsDefaultSettings($formId = false)
    {
    }
    public static function getAdvancedValidationSettings($formId)
    {
    }
    public static function remove($formId)
    {
    }
}
namespace FluentForm\App\Helpers;

class Protector
{
    /**
     * Get the salt for the encryption and decryption.
     */
    public static function getSalt()
    {
    }
    /**
     * Encryp a text using a predefined salt.
     *
     * @param string $text
     *
     * @return string $text
     */
    public static function encrypt($text)
    {
    }
    /**
     * Decrypt a text using a predefined salt.
     *
     * @param string $text
     *
     * @return string $text
     */
    public static function decrypt($text)
    {
    }
}
class Str
{
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return bool
     */
    public static function startsWith($haystack, $needles)
    {
    }
    /**
     * Determine if a given string ends with a given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return bool
     */
    public static function endsWith($haystack, $needles)
    {
    }
    /**
     * Determine if a given string contains a given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return bool
     */
    public static function contains($haystack, $needles)
    {
    }
    /**
     * Determine if a given string does not contain a given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return bool
     */
    public static function doNotContains($haystack, $needles)
    {
    }
    /**
     * Split string as array of string on given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return array
     */
    public static function separateString($haystack, $needles)
    {
    }
}
namespace FluentForm\App\Helpers\Traits;

trait GlobalDefaultMessages
{
    private static $globalDefaultMessages = [];
    public static function getGlobalDefaultMessage($key)
    {
    }
    public static function getAllGlobalDefaultMessages()
    {
    }
    private static function setGlobalDefaultMessages()
    {
    }
    public static function globalDefaultMessageSettingFields()
    {
    }
}
namespace FluentForm\App\Helpers;

class IntegrationManagerHelper
{
    protected $settingsKey;
    protected $formId;
    protected $isMultiple;
    protected $integrationService;
    public function __construct($settingsKey = '', $form_id = false, $isMultiple = false)
    {
    }
    public function get($settingsId)
    {
    }
    public function save($settings)
    {
    }
    public function update($settingsId, $settings)
    {
    }
    public function delete($settingsId)
    {
    }
    public function getAll()
    {
    }
    protected function logResponse($response, $feed, $data, $form, $entryId, $status)
    {
    }
    protected function getApiResponseMessage($response, $status)
    {
    }
    public function getFormattedValue($setting)
    {
    }
    public static function isIntegrationEnabled($key)
    {
    }
}
class Helper
{
    use \FluentForm\App\Helpers\Traits\GlobalDefaultMessages;
    public static $tabIndex = 0;
    public static $formInstance = 0;
    public static $loadedForms = [];
    public static $tabIndexStatus = 'na';
    protected static $formMetaCache = [];
    /**
     * Sanitize form inputs recursively.
     *
     * @param $input
     *
     * @return string $input
     */
    public static function sanitizer($input, $attribute = null, $fields = [])
    {
    }
    public static function makeMenuUrl($page = 'fluent_forms_settings', $component = null)
    {
    }
    public static function getHtmlElementClass($value1, $value2, $class = 'active', $default = '')
    {
    }
    /**
     * Determines if the given string is a valid json.
     *
     * @param $string
     *
     * @return bool
     */
    public static function isJson($string)
    {
    }
    public static function isSlackEnabled()
    {
    }
    public static function getEntryStatuses($form_id = false)
    {
    }
    public static function getReportableInputs()
    {
    }
    public static function getSubFieldReportableInputs()
    {
    }
    public static function getFormMeta($formId, $metaKey, $default = '', $forced = false)
    {
    }
    public static function setFormMeta($formId, $metaKey, $value)
    {
    }
    public static function deleteFormMeta($formId, $metaKey)
    {
    }
    public static function getSubmissionMeta($submissionId, $metaKey, $default = false)
    {
    }
    public static function setSubmissionMeta($submissionId, $metaKey, $value, $formId = false)
    {
    }
    public static function setSubmissionMetaAsArrayPush($submissionId, $metaKey, $value, $formId = false)
    {
    }
    public static function isEntryAutoDeleteEnabled($formId)
    {
    }
    public static function formExtraCssClass($form)
    {
    }
    public static function getNextTabIndex($increment = 1)
    {
    }
    public static function getFormInstaceClass($formId)
    {
    }
    public static function resetTabIndex()
    {
    }
    public static function isFluentAdminPage()
    {
    }
    public static function getShortCodeIds($content, $tag = 'fluentform', $selector = 'id')
    {
    }
    public static function getFormsIdsFromBlocks($content)
    {
    }
    public static function isTabIndexEnabled()
    {
    }
    public static function isMultiStepForm($formOrId)
    {
    }
    public static function hasFormElement($formId, $elementName)
    {
    }
    public static function isUniqueValidation($validation, $field, $formData, $fields, $form)
    {
    }
    public static function hasPartialEntries($formId)
    {
    }
    public static function getNumericFormatters()
    {
    }
    public static function getNumericValue($input, $formatterName)
    {
    }
    public static function getNumericFormatted($input, $formatterName)
    {
    }
    public static function getDuplicateFieldNames($fields)
    {
    }
    protected static function getFieldNamesStatuses($fields)
    {
    }
    public static function isConversionForm($formId)
    {
    }
    public static function getPreviewUrl($formId, $type = '')
    {
    }
    public static function getFormAdminPermalink($route, $form)
    {
    }
    public static function getFormSettingsUrl($form)
    {
    }
    public static function fileUploadLocations()
    {
    }
    public static function unreadCount($formId)
    {
    }
    public static function getForms()
    {
    }
    public static function replaceBrTag($content, $with = '')
    {
    }
    public static function hasBrTag($content)
    {
    }
    public static function sanitizeForCSV($content)
    {
    }
    public static function sanitizeOrderValue($orderType = '')
    {
    }
    public static function getForm($id)
    {
    }
    public static function shouldHidePassword($formId)
    {
    }
    // make tabular-grid value markdown format
    public static function getTabularGridFormatValue($girdData, $field, $rowJoiner = '<br />', $colJoiner = ', ', $type = '')
    {
    }
    public static function getInputNameFromShortCode($value)
    {
    }
    public static function getRestInfo()
    {
    }
    public static function getLogInitiator($action, $type = 'log')
    {
    }
    public static function getIpinfo()
    {
    }
    public static function isAutoloadCaptchaEnabled()
    {
    }
    public static function isAutosaveEnabled()
    {
    }
    public static function maybeDecryptUrl($url)
    {
    }
    public static function arrayFilterRecursive($arrayItems)
    {
    }
    public static function isBlockEditor()
    {
    }
    public static function resolveValidationRulesGlobalOption(&$field)
    {
    }
    /**
     * Validate form input value against database values
     *
     * @param $field array Form Field
     * @param $formData array From Data
     * @param $form object From
     * @param $fieldName string optional
     * @param $inputValue mixed optional
     *
     * @return string
     * Return Error message on fail. Otherwise, return empty string
     */
    public static function validateInput($field, $formData, $form, $fieldName = '', $inputValue = [])
    {
    }
    public static function getWhiteListedFields($formId)
    {
    }
    /**
     * Shortcode parse on validation message
     * @param string $message
     * @param object $form
     * @param string $fieldName
     * @return string
     */
    public static function shortCodeParseOnValidationMessage($message, $form, $fieldName)
    {
    }
    public static function getAjaxUrl()
    {
    }
    public static function getDefaultDateTimeFormatForMoment()
    {
    }
    public static function isDefaultWPDateEnabled()
    {
    }
    public static function isPaymentCompatible()
    {
    }
    /**
     * Determine pro payment script is compatible or not
     * Script is compatible if pro version meets the minimum required version
     *
     * @return bool
     */
    public static function isProPaymentScriptCompatible()
    {
    }
    public static function hasPro()
    {
    }
    public static function getLandingPageEnabledForms()
    {
    }
    public static function sanitizeArrayKeysAndValues($values)
    {
    }
    public static function getFrontendFacingUrl($args = '')
    {
    }
    public static function getCountryCodeFromHeaders()
    {
    }
    /**
     * Fixes PHP Object Injection Vulnerability
     * @param $data
     * @return mixed
     */
    public static function safeUnserialize($data)
    {
    }
    /**
     * If elementor editor is open
     * @return bool
     */
    public static function isElementorEditor()
    {
    }
    /**
     * Check if we're in block editor context (Site Editor, Template Editor, or Post/Page Editor)
     * Covers all Gutenberg block editor contexts including mobile/tablet preview iframes
     * @return bool
     */
    public static function isSiteEditor()
    {
    }
}
namespace FluentForm\Framework\Support;

trait MacroableTrait
{
    /**
     * The registered string macros.
     *
     * @var array
     */
    protected static $macros = [];
    /**
     * Register a custom macro.
     *
     * @param  string  $name
     * @param  object|callable  $macro
     * @return void
     */
    public static function macro($name, $macro)
    {
    }
    /**
     * Mix another object into the class.
     *
     * @param  object  $mixin
     * @param  bool  $replace
     * @return void
     *
     * @throws \ReflectionException
     */
    public static function mixin($mixin, $replace = true)
    {
    }
    /**
     * Checks if macro is registered.
     *
     * @param  string  $name
     * @return bool
     */
    public static function hasMacro($name)
    {
    }
    /**
     * Flush the existing macros.
     *
     * @return void
     */
    public static function flushMacros()
    {
    }
    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic($method, $parameters)
    {
    }
    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
    }
}
class Arr
{
    use \FluentForm\Framework\Support\MacroableTrait;
    /**
     * Makes a collection from array
     * 
     * @param  array $array
     * @return \FluentForm\Framework\Support\Collection
     */
    public static function of(array $array)
    {
    }
    /**
     * Determine whether the given value is array accessible.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function accessible($value)
    {
    }
    /**
     * Add an element to an array using "dot" notation if it doesn't exist.
     *
     * @param  array  $array
     * @param  string  $key
     * @param  mixed  $value
     * @return array
     */
    public static function add($array, $key, $value)
    {
    }
    /**
     * Collapse an array of arrays into a single array.
     *
     * @param  iterable  $array
     * @return array
     */
    public static function collapse($array)
    {
    }
    /**
     * Cross join the given arrays, returning all possible permutations.
     *
     * @param  iterable  ...$arrays
     * @return array
     */
    public static function crossJoin(...$arrays)
    {
    }
    /**
     * Divide an array into two arrays. One with keys and the other with values.
     *
     * @param  array  $array
     * @return array
     */
    public static function divide($array)
    {
    }
    /**
     * Flatten a multi-dimensional associative array with dots.
     *
     * @param  iterable  $array
     * @param  string  $prepend
     * @return array
     */
    public static function dot($array, $prepend = '')
    {
    }
    /**
     * Convert a flatten "dot" notation array into an expanded array.
     *
     * @param  iterable  $array
     * @return array
     */
    public static function undot($array)
    {
    }
    /**
     * Get all of the given array except for a specified array of keys.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    public static function except($array, $keys)
    {
    }
    /**
     * Determine if the given key exists in the provided array.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function exists($array, $key)
    {
    }
    /**
     * Alias of exists.
     * @param  \ArrayAccess|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function keyExists($array, $key)
    {
    }
    /**
     * Alias of exists.
     * @param  \ArrayAccess|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function arrayKeyExists($array, $key)
    {
    }
    /**
     * Return the first element in an array passing a given truth test.
     *
     * @param  iterable  $array
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public static function first($array, ?callable $callback = null, $default = null)
    {
    }
    /**
     * Returns the key of the first item (matching the specified
     * callback if given) or null if there is no such item.
     * 
     * @param  array $array
     * @param  callable|null $callback
     * @return mixed
     */
    public static function firstKey($array, ?callable $callback = null)
    {
    }
    /**
     * Recursively filter an array like array_filter.
     * 
     * @param  array $array
     * @param  callable|null $cb
     * @param  integer $mode (ARRAY_FILTER_USE_BOTH = 1 | ARRAY_FILTER_USE_KEY = 2)
     * @return array
     */
    public static function filterRecursive($array, ?callable $cb = null, $mode = 0)
    {
    }
    /**
     * Recursively search the value and return the path of first match.
     * 
     * @param array $array
     * @param mixed $value
     * @param bool $ci (false for case insensitive search, true otherwise)
     * @return string|null
     */
    public static function findPath($array, $value, $ci = false)
    {
    }
    /**
     * Return the last element in an array passing a given truth test.
     *
     * @param  array  $array
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public static function last($array, ?callable $callback = null, $default = null)
    {
    }
    /**
     * Returns the key of the last item (matching the specified
     * callback if given) or null if there is no such item.
     * 
     * @param  array $array
     * @param  callable|null $callback
     * @return mixed
     */
    public static function lastKey($array, ?callable $callback = null)
    {
    }
    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @param  iterable  $array
     * @param  int|float  $depth
     * @return array
     */
    public static function flatten($array, $depth = INF)
    {
    }
    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return void
     */
    public static function forget(&$array, $keys)
    {
    }
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|int|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get($array, $key, $default = null)
    {
    }
    /**
     * Check if an item or items (using key) exist in an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|array  $keys
     * @return bool
     */
    public static function has($array, $keys)
    {
    }
    /**
     * Determine if any of the keys exist in an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|array  $keys
     * @return bool
     */
    public static function hasAny($array, $keys)
    {
    }
    /**
     * Alias of contains.
     *
     * @param  array $array
     * @param  string|array  $value
     * @return bool
     */
    public static function inArray($array, $value)
    {
    }
    /**
     * Determines if an array is associative.
     *
     * An array is "associative" if it doesn't have
     * sequential numerical keys beginning with zero.
     *
     * @param  array  $array
     * @return bool
     */
    public static function isAssoc(array $array)
    {
    }
    /**
     * Determines if an array is a list.
     *
     * An array is a "list" if all array keys are sequential
     * integers starting from 0 with no gaps in between.
     *
     * @param  array  $array
     * @return bool
     */
    public static function isList($array)
    {
    }
    /**
     * Determines if the given key contains a boolean value.
     *
     * Returns true for true, 1, "1", "true", "on" and "yes"
     * Returns false for false, "0", "false", "off", "no", and ""
     * Returns for all non-boolean values.
     *
     * @param  array  $array
     * @param  string $key
     * 
     * @return bool|null
     * @see https://www.php.net/manual/en/filter.filters.validate.php
     */
    public static function isTrue($array, $key)
    {
    }
    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    public static function only($array, $keys)
    {
    }
    /**
     * Select an array of values from an array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    public static function select($array, $keys)
    {
    }
    /**
     * Pluck an array of values from an array.
     *
     * @param  iterable  $array
     * @param  string|array|int|null  $value
     * @param  string|array|null  $key
     * @return array
     */
    public static function pluck($array, $value, $key = null)
    {
    }
    /**
     * Explode the "value" and "key" arguments passed to "pluck".
     *
     * @param  string|array  $value
     * @param  string|array|null  $key
     * @return array
     */
    protected static function explodePluckParameters($value, $key)
    {
    }
    /**
     * Push an item onto the beginning of an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @param  mixed  $key
     * @return array
     */
    public static function prepend($array, $value, $key = null)
    {
    }
    /**
     * Get a value from the array, and remove it.
     *
     * @param  array  $array
     * @param  string|int  $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function pull(&$array, $key, $default = null)
    {
    }
    /**
     * Convert the array into a query string.
     *
     * @param  array  $array
     * @return string
     */
    public static function query($array)
    {
    }
    /**
     * Get one or a specified number of random values from an array.
     *
     * @param  array  $array
     * @param  int|null  $number
     * @param  bool|false  $preserveKeys
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function random($array, $number = null, $preserveKeys = false)
    {
    }
    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @param  array  $array
     * @param  string|null  $key
     * @param  mixed  $value
     * @return array
     */
    public static function set(&$array, $key, $value)
    {
    }
    /**
     * Shuffle the given array and return the result.
     *
     * @param  array  $array
     * @param  int|null  $seed
     * @return array
     */
    public static function shuffle($array, $seed = null)
    {
    }
    /**
     * Sort the array using the given callback or "dot" notation.
     *
     * @param  array  $array
     * @param  callable|array|string|null  $callback
     * @return array
     */
    public static function sort($array, $callback = null)
    {
    }
    /**
     * Sort an array in descending order.
     *
     * @param  array       $array  The input array.
     * @param  int-mask-of<SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING|SORT_NATURAL|SORT_FLAG_CASE>  $flags
     * @return array
     * 
     * @see https://www.php.net/manual/en/function.rsort.php
     */
    public static function rsort($array, $flags = SORT_REGULAR)
    {
    }
    /**
     * Sort an array in ascending order and maintain index association.
     *
     * @param  array  $array
     * @param  int-mask-of<SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING|SORT_NATURAL|SORT_FLAG_CASE>  $flags
     * @return array
     * @see https://www.php.net/manual/en/function.asort.php
     */
    public static function asort($array, $flags = SORT_REGULAR)
    {
    }
    /**
     * Sort an array in descending order and maintain index association.
     *
     * @param  array  $array
     * @param  int-mask-of<SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING|SORT_NATURAL|SORT_FLAG_CASE>  $flags
     * @return array
     * @see https://www.php.net/manual/en/function.arsort.php
     */
    public static function arsort($array, $flags = SORT_REGULAR)
    {
    }
    /**
     * Sort an array by key in ascending order.
     *
     * @param  array  $array
     * @param  int-mask-of<SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING|SORT_NATURAL|SORT_FLAG_CASE>  $flags
     * @return array
     * @see https://www.php.net/manual/en/function.ksort.php
     */
    public static function ksort($array, $flags = SORT_REGULAR)
    {
    }
    /**
     * Sort an array by key in descending order.
     *
     * @param  array  $array
     * @param  int-mask-of<SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING|SORT_NATURAL|SORT_FLAG_CASE>  $flags
     * @return array
     * @see https://www.php.net/manual/en/function.krsort.php
     */
    public static function krsort($array, $flags = SORT_REGULAR)
    {
    }
    /**
     * Sort an array using a "natural order" algorithm.
     *
     * @param  array  $array
     * @return array
     * @see https://www.php.net/manual/en/function.natsort.php
     */
    public static function natsort($array)
    {
    }
    /**
     * Sort an array using a case insensitive "natural order" algorithm.
     *
     * @param  array  $array
     * @return array
     * @see https://www.php.net/manual/en/function.natcasesort.php
     */
    public static function natcasesort($array)
    {
    }
    /**
     * Sort an array by values using a user-defined comparison function.
     *
     * @param  array  $array
     * @return array
     * @see https://www.php.net/manual/en/function.usort.php
     */
    public static function usort($array, callable $callback)
    {
    }
    /**
     * Sort an array with a user-defined comparison
     * function and maintain index association.
     *
     * @param  array  $array
     * @return array
     * @see https://www.php.net/manual/en/function.uasort.php
     */
    public static function uasort($array, callable $callback)
    {
    }
    /**
     * Sort an array by keys using a user-defined comparison function.
     *
     * @param  array  $array
     * @return array
     * @see https://www.php.net/manual/en/function.uksort.php
     */
    public static function uksort($array, callable $callback)
    {
    }
    /**
     * Recursively sort an array by keys and values.
     *
     * @param  array  $array
     * @param  int  $options
     * @param  bool  $desc
     * @return array
     */
    public static function sortRecursive($array, $options = SORT_REGULAR, $desc = false)
    {
    }
    /**
     * Recursively sort an array by keys and values in Descending order.
     *
     * @param  array  $array
     * @param  int  $options
     * @param  bool  $desc
     * @return array
     */
    public static function sortRecursiveDesc($array, $options = SORT_REGULAR, $desc = false)
    {
    }
    /**
     * Conditionally compile classes from an array into a CSS class list.
     *
     * @param  array  $array
     * @return string
     */
    public static function toCssClasses($array)
    {
    }
    /**
     * Transforms an array to \stdClass
     * @param  array $array
     * @return \stdClass
     */
    public static function toObject($array)
    {
    }
    /**
     * Filter the array using the given callback.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    public static function where($array, callable $callback)
    {
    }
    /**
     * Filter items where the value is not null.
     *
     * @param  array  $array
     * @return array
     */
    public static function whereNotNull($array)
    {
    }
    /**
     * Filter items where the value is not null.
     *
     * @param  array  $array
     * @return array
     */
    public static function whereNotTrue($array, $strict = false)
    {
    }
    /**
     * If the given value is not an array and not null, wrap it in one.
     *
     * @param  mixed  $value
     * @return array
     */
    public static function wrap($value)
    {
    }
    /**
     * Maps a function to all non-iterable elements of an array or an object.
     *
     * This is similar to `array_walk_recursive()` but acts upon objects too.
     *
     * @param mixed    $value    The array, object, or scalar.
     * @param callable $callback The function to map onto $value.
     * @see https://developer.wordpress.org/reference/functions/map_deep/
     * 
     * @return mixed The value with the callback applied to all non-arrays and non-objects inside it.
     */
    public static function map($value, $callback)
    {
    }
    /**
     * Check if the value(s) exist in an array using "dot" notation.
     *
     * @param  array $array
     * @param  string|array  $values
     * @return bool
     */
    public static function contains(array $array, $values)
    {
    }
    /**
     * Check if the any value exist in an array using "dot" notation.
     *
     * @param  array $array
     * @param  string|array  $values
     * @return bool
     */
    public static function containsAny(array $array, $values)
    {
    }
    /**
     * Compare two nested arrays side by side
     * @param  array $array1
     * @param  array $array2
     * @param  array $path
     * @return array
     */
    public static function compare($array1, $array2, $path = [])
    {
    }
    /**
     * Merge the items from the first array into the
     * second array if the second array is missing it.
     * 
     * @param  array &$array1
     * @param  array &$array2
     * @return array         
     */
    public static function mergeMissing(&$array1, &$array2)
    {
    }
    /**
     * Recursively merge the given array with defaults.
     * Overwrite $array with $defaults if only $array
     * contains null or empty values or doesn't exist.
     *
     * @param  array  $array
     * @param  array  $defaults
     * @return array
     */
    public static function mergeMissingValues(array $array, array $defaults)
    {
    }
    /**
     * Return matching items from array (similar to mysql's %LIKE%)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function like($array, $pattern)
    {
    }
    /**
     * Return non-matching items from array (similar to mysql's NOT %LIKE%)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function notLike($array, $pattern)
    {
    }
    /**
     * Return matching starting of items from array (similar to mysql's %LIKE)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function startsLike($array, $pattern)
    {
    }
    /**
     * Return non-matching starting of items from array (similar to mysql's NOT %LIKE)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function DoesNotStartLike($array, $pattern)
    {
    }
    /**
     * Return matching ending of items from array (similar to mysql's LIKE%)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function endsLike($array, $pattern)
    {
    }
    /**
     * Return non-matching ending of items from array (similar to mysql's NOT LIKE%)
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function DoesNotEndLike($array, $pattern)
    {
    }
    /**
     * Return matching items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysLike($array, $pattern)
    {
    }
    /**
     * Return non-matching items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysNotLike($array, $pattern)
    {
    }
    /**
     * Return matching starting of items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysStartLike($array, $pattern)
    {
    }
    /**
     * Return non-matching starting of items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysDoesNotStartLike($array, $pattern)
    {
    }
    /**
     * Return matching ending of items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysEndLike($array, $pattern)
    {
    }
    /**
     * Return non-matching ending of items from array by keys
     * 
     * @param  string $pattern (plain string or regex)
     * @param  array $array
     * @return array|false
     */
    public static function keysDoesNotEndLike($array, $pattern)
    {
    }
    /**
     * Insert a new item in the array at the given position.
     * 
     * @param  array $array
     * @param  int $pos
     * @param  mixed $newItem
     * @return array
     */
    public static function insertAt($array, $pos, $newItem)
    {
    }
    /**
     * Inserts an item before the specified key in the given array. If the
     * key is not found, inserts the item at the beginning of the array.
     *
     * @param  array $array
     * @param  mixed $key
     * @param  mixed $newKey
     * @param  mixed $newValue
     * @return array $newArray
     */
    public static function insertBefore($array, $key, $newKey, $newValue)
    {
    }
    /**
     * Inserts an item after the specified key in the given array. If the
     * key is not found, inserts the item at the end of the array.
     *
     * @param  array $array
     * @param  mixed $key
     * @param  mixed $newKey
     * @param  mixed $newValue
     * @return array $newArray
     */
    public static function insertAfter($array, $key, $newKey, $newValue)
    {
    }
    /**
     * Tests whether at least one element in the array passes
     * the test implemented by the provided callback.
     * 
     * @param  array $array
     * @param  callable $callback
     * @return bool
     */
    public static function some($array, callable $callback)
    {
    }
    /**
     * Tests whether all elements in the array pass the
     * test implemented by the provided callback.
     *
     * @param  array $array
     * @param  callable $callback
     * @return bool
     */
    public static function every($array, callable $callback)
    {
    }
    /**
     * Finds the first element in the array that satisfies the
     * condition implemented by the callback function.
     *
     * @param array $array
     * @param callable $callback
     * @return mixed
     */
    public static function find($array, callable $callback, $findKey = false)
    {
    }
    /**
     * Finds the first key in the array that satisfies the
     * condition implemented by the callback function.
     *
     * @param array $array
     * @param callable $callback
     * @return mixed
     */
    public static function findKey($array, callable $callback)
    {
    }
    /**
     * Find similar words in an array.
     * 
     * @param  string  $needle
     * @param  array   $haystack
     * @param  integer $accuracy
     * @return string|null         
     */
    public static function findSimilar($needle, array $haystack, $accuracy = 60)
    {
    }
    /**
     * Pass the items through a series of callbacks.
     * 
     * @param  array   $items
     * @param  array   $callbacks
     * @param  integer $mode
     * @return array
     */
    public static function passThrough(array $items, array $callbacks, $mode = 0)
    {
    }
}
interface ArrayableInterface
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}
interface JsonableInterface
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0);
}
interface Enumerable extends \FluentForm\Framework\Support\ArrayableInterface, \Countable, \IteratorAggregate, \FluentForm\Framework\Support\JsonableInterface, \JsonSerializable
{
    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @param  mixed  $items
     * @return static
     */
    public static function make($items = []);
    /**
     * Create a new instance by invoking the callback a given amount of times.
     *
     * @param  int  $number
     * @param  callable|null  $callback
     * @return static
     */
    public static function times($number, ?callable $callback = null);
    /**
     * Create a collection with the given range.
     *
     * @param  int  $from
     * @param  int  $to
     * @return static
     */
    public static function range($from, $to);
    /**
     * Wrap the given value in a collection if applicable.
     *
     * @param  mixed  $value
     * @return static
     */
    public static function wrap($value);
    /**
     * Get the underlying items from the given collection if applicable.
     *
     * @param  array|static  $value
     * @return array
     */
    public static function unwrap($value);
    /**
     * Create a new instance with no items.
     *
     * @return static
     */
    public static function empty();
    /**
     * Get all items in the enumerable.
     *
     * @return array
     */
    public function all();
    /**
     * Alias for the "avg" method.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function average($callback = null);
    /**
     * Get the median of a given key.
     *
     * @param  string|array|null  $key
     * @return mixed
     */
    public function median($key = null);
    /**
     * Get the mode of a given key.
     *
     * @param  string|array|null  $key
     * @return array|null
     */
    public function mode($key = null);
    /**
     * Collapse the items into a single enumerable.
     *
     * @return static
     */
    public function collapse();
    /**
     * Alias for the "contains" method.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function some($key, $operator = null, $value = null);
    /**
     * Determine if an item exists, using strict comparison.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return bool
     */
    public function containsStrict($key, $value = null);
    /**
     * Get the average value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function avg($callback = null);
    /**
     * Determine if an item exists in the enumerable.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function contains($key, $operator = null, $value = null);
    /**
     * Cross join with the given lists, returning all possible permutations.
     *
     * @param  mixed  ...$lists
     * @return static
     */
    public function crossJoin(...$lists);
    /**
     * Dump the collection and end the script.
     *
     * @param  mixed  ...$args
     * @return void
     */
    // public function dd(...$args);
    /**
     * Dump the collection.
     *
     * @return $this
     */
    // public function dump();
    /**
     * Get the items that are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diff($items);
    /**
     * Get the items that are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffUsing($items, callable $callback);
    /**
     * Get the items whose keys and values are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diffAssoc($items);
    /**
     * Get the items whose keys and values are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffAssocUsing($items, callable $callback);
    /**
     * Get the items whose keys are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diffKeys($items);
    /**
     * Get the items whose keys are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffKeysUsing($items, callable $callback);
    /**
     * Retrieve duplicate items.
     *
     * @param  callable|string|null  $callback
     * @param  bool  $strict
     * @return static
     */
    public function duplicates($callback = null, $strict = false);
    /**
     * Retrieve duplicate items using strict comparison.
     *
     * @param  callable|string|null  $callback
     * @return static
     */
    public function duplicatesStrict($callback = null);
    /**
     * Execute a callback over each item.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function each(callable $callback);
    /**
     * Execute a callback over each nested chunk of items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function eachSpread(callable $callback);
    /**
     * Determine if all items pass the given truth test.
     *
     * @param  string|callable  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function every($key, $operator = null, $value = null);
    /**
     * Get all items except for those with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function except($keys);
    /**
     * Run a filter over each of the items.
     *
     * @param  callable|null  $callback
     * @return static
     */
    public function filter(?callable $callback = null);
    /**
     * Apply the callback if the value is truthy.
     *
     * @param  bool  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function when($value, callable $callback, ?callable $default = null);
    /**
     * Apply the callback if the collection is empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function whenEmpty(callable $callback, ?callable $default = null);
    /**
     * Apply the callback if the collection is not empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function whenNotEmpty(callable $callback, ?callable $default = null);
    /**
     * Apply the callback if the value is falsy.
     *
     * @param  bool  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unless($value, callable $callback, ?callable $default = null);
    /**
     * Apply the callback unless the collection is empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unlessEmpty(callable $callback, ?callable $default = null);
    /**
     * Apply the callback unless the collection is not empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unlessNotEmpty(callable $callback, ?callable $default = null);
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return static
     */
    public function where($key, $operator = null, $value = null);
    /**
     * Filter items where the value for the given key is null.
     *
     * @param  string|null  $key
     * @return static
     */
    public function whereNull($key = null);
    /**
     * Filter items where the value for the given key is not null.
     *
     * @param  string|null  $key
     * @return static
     */
    public function whereNotNull($key = null);
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return static
     */
    public function whereStrict($key, $value);
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @param  bool  $strict
     * @return static
     */
    public function whereIn($key, $values, $strict = false);
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @return static
     */
    public function whereInStrict($key, $values);
    /**
     * Filter items such that the value of the given key is between the given values.
     *
     * @param  string  $key
     * @param  array  $values
     * @return static
     */
    public function whereBetween($key, $values);
    /**
     * Filter items such that the value of the given key is not between the given values.
     *
     * @param  string  $key
     * @param  array  $values
     * @return static
     */
    public function whereNotBetween($key, $values);
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @param  bool  $strict
     * @return static
     */
    public function whereNotIn($key, $values, $strict = false);
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @return static
     */
    public function whereNotInStrict($key, $values);
    /**
     * Filter the items, removing any items that don't match the given type(s).
     *
     * @param  string|string[]  $type
     * @return static
     */
    public function whereInstanceOf($type);
    /**
     * Get the first item from the enumerable passing the given truth test.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function first(?callable $callback = null, $default = null);
    /**
     * Get the first item by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return mixed
     */
    public function firstWhere($key, $operator = null, $value = null);
    /**
     * Get a flattened array of the items in the collection.
     *
     * @param  int|float  $depth
     * @return static
     */
    public function flatten($depth = INF);
    /**
     * Flip the values with their keys.
     *
     * @return static
     */
    public function flip();
    /**
     * Get an item from the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null);
    /**
     * Group an associative array by a field or using a callback.
     *
     * @param  array|callable|string  $groupBy
     * @param  bool  $preserveKeys
     * @return static
     */
    public function groupBy($groupBy, $preserveKeys = false);
    /**
     * Key an associative array by a field or using a callback.
     *
     * @param  callable|string  $keyBy
     * @return static
     */
    public function keyBy($keyBy);
    /**
     * Determine if an item exists in the collection by key.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function has($key);
    /**
     * Concatenate values of a given key as a string.
     *
     * @param  string  $value
     * @param  string|null  $glue
     * @return string
     */
    public function implode($value, $glue = null);
    /**
     * Intersect the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersect($items);
    /**
     * Intersect the collection with the given items by key.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersectByKeys($items);
    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty();
    /**
     * Determine if the collection is not empty.
     *
     * @return bool
     */
    public function isNotEmpty();
    /**
     * Join all items from the collection using a string. The final items can use a separate glue string.
     *
     * @param  string  $glue
     * @param  string  $finalGlue
     * @return string
     */
    public function join($glue, $finalGlue = '');
    /**
     * Get the keys of the collection items.
     *
     * @return static
     */
    public function keys();
    /**
     * Get the last item from the collection.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function last(?callable $callback = null, $default = null);
    /**
     * Run a map over each of the items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function map(callable $callback);
    /**
     * Run a map over each nested chunk of items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapSpread(callable $callback);
    /**
     * Run a dictionary map over the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapToDictionary(callable $callback);
    /**
     * Run a grouping map over the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapToGroups(callable $callback);
    /**
     * Run an associative map over each of the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapWithKeys(callable $callback);
    /**
     * Map a collection and flatten the result by a single level.
     *
     * @param  callable  $callback
     * @return static
     */
    public function flatMap(callable $callback);
    /**
     * Map the values into a new class.
     *
     * @param  string  $class
     * @return static
     */
    public function mapInto($class);
    /**
     * Merge the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function merge($items);
    /**
     * Recursively merge the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function mergeRecursive($items);
    /**
     * Create a collection by using this collection for keys and another for its values.
     *
     * @param  mixed  $values
     * @return static
     */
    public function combine($values);
    /**
     * Union the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function union($items);
    /**
     * Get the min value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function min($callback = null);
    /**
     * Get the max value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function max($callback = null);
    /**
     * Create a new collection consisting of every n-th element.
     *
     * @param  int  $step
     * @param  int  $offset
     * @return static
     */
    public function nth($step, $offset = 0);
    /**
     * Get the items with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function only($keys);
    /**
     * "Paginate" the collection by slicing it into a smaller collection.
     *
     * @param  int  $page
     * @param  int  $perPage
     * @return static
     */
    public function forPage($page, $perPage);
    /**
     * Partition the collection into two arrays using the given callback or key.
     *
     * @param  callable|string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return static
     */
    public function partition($key, $operator = null, $value = null);
    /**
     * Push all of the given items onto the collection.
     *
     * @param  iterable  $source
     * @return static
     */
    public function concat($source);
    /**
     * Get one or a specified number of items randomly from the collection.
     *
     * @param  int|null  $number
     * @return static|mixed
     *
     * @throws \InvalidArgumentException
     */
    public function random($number = null);
    /**
     * Reduce the collection to a single value.
     *
     * @param  callable  $callback
     * @param  mixed  $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null);
    /**
     * Replace the collection items with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function replace($items);
    /**
     * Recursively replace the collection items with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function replaceRecursive($items);
    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse();
    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param  mixed  $value
     * @param  bool  $strict
     * @return mixed
     */
    public function search($value, $strict = false);
    /**
     * Shuffle the items in the collection.
     *
     * @param  int|null  $seed
     * @return static
     */
    public function shuffle($seed = null);
    /**
     * Skip the first {$count} items.
     *
     * @param  int  $count
     * @return static
     */
    public function skip($count);
    /**
     * Skip items in the collection until the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function skipUntil($value);
    /**
     * Skip items in the collection while the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function skipWhile($value);
    /**
     * Get a slice of items from the enumerable.
     *
     * @param  int  $offset
     * @param  int|null  $length
     * @return static
     */
    public function slice($offset, $length = null);
    /**
     * Split a collection into a certain number of groups.
     *
     * @param  int  $numberOfGroups
     * @return static
     */
    public function split($numberOfGroups);
    /**
     * Chunk the collection into chunks of the given size.
     *
     * @param  int  $size
     * @return static
     */
    public function chunk($size);
    /**
     * Chunk the collection into chunks with a callback.
     *
     * @param  callable  $callback
     * @return static
     */
    public function chunkWhile(callable $callback);
    /**
     * Sort through each item with a callback.
     *
     * @param  callable|null|int  $callback
     * @return static
     */
    public function sort($callback = null);
    /**
     * Sort items in descending order.
     *
     * @param  int  $options
     * @return static
     */
    public function sortDesc($options = SORT_REGULAR);
    /**
     * Sort the collection using the given callback.
     *
     * @param  callable|string  $callback
     * @param  int  $options
     * @param  bool  $descending
     * @return static
     */
    public function sortBy($callback, $options = SORT_REGULAR, $descending = false);
    /**
     * Sort the collection in descending order using the given callback.
     *
     * @param  callable|string  $callback
     * @param  int  $options
     * @return static
     */
    public function sortByDesc($callback, $options = SORT_REGULAR);
    /**
     * Sort the collection keys.
     *
     * @param  int  $options
     * @param  bool  $descending
     * @return static
     */
    public function sortKeys($options = SORT_REGULAR, $descending = false);
    /**
     * Sort the collection keys in descending order.
     *
     * @param  int  $options
     * @return static
     */
    public function sortKeysDesc($options = SORT_REGULAR);
    /**
     * Get the sum of the given values.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function sum($callback = null);
    /**
     * Take the first or last {$limit} items.
     *
     * @param  int  $limit
     * @return static
     */
    public function take($limit);
    /**
     * Take items in the collection until the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function takeUntil($value);
    /**
     * Take items in the collection while the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function takeWhile($value);
    /**
     * Pass the collection to the given callback and then return it.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function tap(callable $callback);
    /**
     * Pass the enumerable to the given callback and return the result.
     *
     * @param  callable  $callback
     * @return mixed
     */
    public function pipe(callable $callback);
    /**
     * Get the values of a given key.
     *
     * @param  string|array  $value
     * @param  string|null  $key
     * @return static
     */
    public function pluck($value, $key = null);
    /**
     * Create a collection of all elements that do not pass a given truth test.
     *
     * @param  callable|mixed  $callback
     * @return static
     */
    public function reject($callback = true);
    /**
     * Return only unique items from the collection array.
     *
     * @param  string|callable|null  $key
     * @param  bool  $strict
     * @return static
     */
    public function unique($key = null, $strict = false);
    /**
     * Return only unique items from the collection array using strict comparison.
     *
     * @param  string|callable|null  $key
     * @return static
     */
    public function uniqueStrict($key = null);
    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values();
    /**
     * Pad collection to the specified length with a value.
     *
     * @param  int  $size
     * @param  mixed  $value
     * @return static
     */
    public function pad($size, $value);
    /**
     * Count the number of items in the collection using a given truth test.
     *
     * @param  callable|null  $callback
     * @return static
     */
    public function countBy($callback = null);
    /**
     * Zip the collection together with one or more arrays.
     *
     * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
     *      => [[1, 4], [2, 5], [3, 6]]
     *
     * @param  mixed  ...$items
     * @return static
     */
    public function zip($items);
    /**
     * Collect the values into a collection.
     *
     * @return \FluentForm\Framework\Support\Collection
     */
    public function collect();
    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString();
    /**
     * Add a method to the list of proxied methods.
     *
     * @param  string  $method
     * @return void
     */
    public static function proxy($method);
    /**
     * Dynamically access collection proxies.
     *
     * @param  string  $key
     * @return mixed
     *
     * @throws \Exception
     */
    public function __get($key);
}
/**
 * @property-read HigherOrderCollectionProxy $average
 * @property-read HigherOrderCollectionProxy $avg
 * @property-read HigherOrderCollectionProxy $contains
 * @property-read HigherOrderCollectionProxy $doesntContain
 * @property-read HigherOrderCollectionProxy $each
 * @property-read HigherOrderCollectionProxy $every
 * @property-read HigherOrderCollectionProxy $filter
 * @property-read HigherOrderCollectionProxy $first
 * @property-read HigherOrderCollectionProxy $flatMap
 * @property-read HigherOrderCollectionProxy $groupBy
 * @property-read HigherOrderCollectionProxy $keyBy
 * @property-read HigherOrderCollectionProxy $map
 * @property-read HigherOrderCollectionProxy $max
 * @property-read HigherOrderCollectionProxy $min
 * @property-read HigherOrderCollectionProxy $partition
 * @property-read HigherOrderCollectionProxy $reject
 * @property-read HigherOrderCollectionProxy $some
 * @property-read HigherOrderCollectionProxy $sortBy
 * @property-read HigherOrderCollectionProxy $sortByDesc
 * @property-read HigherOrderCollectionProxy $skipUntil
 * @property-read HigherOrderCollectionProxy $skipWhile
 * @property-read HigherOrderCollectionProxy $sum
 * @property-read HigherOrderCollectionProxy $takeUntil
 * @property-read HigherOrderCollectionProxy $takeWhile
 * @property-read HigherOrderCollectionProxy $unique
 * @property-read HigherOrderCollectionProxy $until
 */
trait EnumeratesValues
{
    /**
     * Indicates that the object's string representation should be escaped when __toString is invoked.
     *
     * @var bool
     */
    protected $escapeWhenCastingToString = false;
    /**
     * The methods that can be proxied.
     *
     * @var string[]
     */
    protected static $proxies = ['average', 'avg', 'contains', 'doesntContain', 'each', 'every', 'filter', 'first', 'flatMap', 'groupBy', 'keyBy', 'map', 'max', 'min', 'partition', 'reject', 'skipUntil', 'skipWhile', 'some', 'sortBy', 'sortByDesc', 'sum', 'takeUntil', 'takeWhile', 'unique', 'until'];
    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @param  mixed  $items
     * @return static
     */
    public static function make($items = [])
    {
    }
    /**
     * Wrap the given value in a collection if applicable.
     *
     * @param  mixed  $value
     * @return static
     */
    public static function wrap($value)
    {
    }
    /**
     * Get the underlying items from the given collection if applicable.
     *
     * @param  array|static  $value
     * @return array
     */
    public static function unwrap($value)
    {
    }
    /**
     * Create a new instance with no items.
     *
     * @return static
     */
    public static function empty()
    {
    }
    /**
     * Create a new collection by invoking the callback a given amount of times.
     *
     * @param  int  $number
     * @param  callable|null  $callback
     * @return static
     */
    public static function times($number, ?callable $callback = null)
    {
    }
    /**
     * Alias for the "avg" method.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function average($callback = null)
    {
    }
    /**
     * Alias for the "contains" method.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function some($key, $operator = null, $value = null)
    {
    }
    /**
     * Determine if an item exists, using strict comparison.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return bool
     */
    public function containsStrict($key, $value = null)
    {
    }
    /**
     * Execute a callback over each item.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function each(callable $callback)
    {
    }
    /**
     * Execute a callback over each nested chunk of items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function eachSpread(callable $callback)
    {
    }
    /**
     * Determine if all items pass the given truth test.
     *
     * @param  string|callable  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function every($key, $operator = null, $value = null)
    {
    }
    /**
     * Get the first item by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return mixed
     */
    public function firstWhere($key, $operator = null, $value = null)
    {
    }
    /**
     * Determine if the collection is not empty.
     *
     * @return bool
     */
    public function isNotEmpty()
    {
    }
    /**
     * Run a map over each nested chunk of items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapSpread(callable $callback)
    {
    }
    /**
     * Run a grouping map over the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapToGroups(callable $callback)
    {
    }
    /**
     * Map a collection and flatten the result by a single level.
     *
     * @param  callable  $callback
     * @return static
     */
    public function flatMap(callable $callback)
    {
    }
    /**
     * Map the values into a new class.
     *
     * @param  string  $class
     * @return static
     */
    public function mapInto($class)
    {
    }
    /**
     * Get the min value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function min($callback = null)
    {
    }
    /**
     * Get the max value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function max($callback = null)
    {
    }
    /**
     * "Paginate" the collection by slicing it into a smaller collection.
     *
     * @param  int  $page
     * @param  int  $perPage
     * @return static
     */
    public function forPage($page, $perPage)
    {
    }
    /**
     * Partition the collection into two arrays using the given callback or key.
     *
     * @param  callable|string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return static
     */
    public function partition($key, $operator = null, $value = null)
    {
    }
    /**
     * Get the sum of the given values.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function sum($callback = null)
    {
    }
    /**
     * Apply the callback if the value is truthy.
     *
     * @param  bool|mixed  $value
     * @param  callable|null  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function when($value, ?callable $callback = null, ?callable $default = null)
    {
    }
    /**
     * Apply the callback if the collection is empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function whenEmpty(callable $callback, ?callable $default = null)
    {
    }
    /**
     * Apply the callback if the collection is not empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function whenNotEmpty(callable $callback, ?callable $default = null)
    {
    }
    /**
     * Apply the callback if the value is falsy.
     *
     * @param  bool  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unless($value, callable $callback, ?callable $default = null)
    {
    }
    /**
     * Apply the callback unless the collection is empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unlessEmpty(callable $callback, ?callable $default = null)
    {
    }
    /**
     * Apply the callback unless the collection is not empty.
     *
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return static|mixed
     */
    public function unlessNotEmpty(callable $callback, ?callable $default = null)
    {
    }
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return static
     */
    public function where($key, $operator = null, $value = null)
    {
    }
    /**
     * Filter items where the value for the given key is null.
     *
     * @param  string|null  $key
     * @return static
     */
    public function whereNull($key = null)
    {
    }
    /**
     * Filter items where the value for the given key is not null.
     *
     * @param  string|null  $key
     * @return static
     */
    public function whereNotNull($key = null)
    {
    }
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return static
     */
    public function whereStrict($key, $value)
    {
    }
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @param  bool  $strict
     * @return static
     */
    public function whereIn($key, $values, $strict = false)
    {
    }
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @return static
     */
    public function whereInStrict($key, $values)
    {
    }
    /**
     * Filter items such that the value of the given key is between the given values.
     *
     * @param  string  $key
     * @param  array  $values
     * @return static
     */
    public function whereBetween($key, $values)
    {
    }
    /**
     * Filter items such that the value of the given key is not between the given values.
     *
     * @param  string  $key
     * @param  array  $values
     * @return static
     */
    public function whereNotBetween($key, $values)
    {
    }
    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @param  bool  $strict
     * @return static
     */
    public function whereNotIn($key, $values, $strict = false)
    {
    }
    /**
     * Filter items by the given key value pair using strict comparison.
     *
     * @param  string  $key
     * @param  mixed  $values
     * @return static
     */
    public function whereNotInStrict($key, $values)
    {
    }
    /**
     * Filter the items, removing any items that don't match the given type(s).
     *
     * @param  string|string[]  $type
     * @return static
     */
    public function whereInstanceOf($type)
    {
    }
    /**
     * Pass the collection to the given callback and return the result.
     *
     * @param  callable  $callback
     * @return mixed
     */
    public function pipe(callable $callback)
    {
    }
    /**
     * Pass the collection into a new class.
     *
     * @param  string  $class
     * @return mixed
     */
    public function pipeInto($class)
    {
    }
    /**
     * Pass the collection through a series of callable pipes
     * and return the result.
     *
     * @param  array<callable>  $pipes
     * @return mixed
     */
    public function pipeThrough($pipes)
    {
    }
    /**
     * Pass the collection to the given callback and then return it.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function tap(callable $callback)
    {
    }
    /**
     * Reduce the collection to a single value.
     *
     * @param  callable  $callback
     * @param  mixed  $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null)
    {
    }
    /**
     * Reduce the collection to multiple aggregate values.
     *
     * @param  callable  $callback
     * @param  mixed  ...$initial
     * @return array
     *
     * @deprecated Use "reduceSpread" instead
     *
     * @throws \UnexpectedValueException
     */
    public function reduceMany(callable $callback, ...$initial)
    {
    }
    /**
     * Reduce the collection to multiple aggregate values.
     *
     * @param  callable  $callback
     * @param  mixed  ...$initial
     * @return array
     *
     * @throws \UnexpectedValueException
     */
    public function reduceSpread(callable $callback, ...$initial)
    {
    }
    /**
     * Reduce an associative collection to a single value.
     *
     * @param  callable  $callback
     * @param  mixed  $initial
     * @return mixed
     */
    public function reduceWithKeys(callable $callback, $initial = null)
    {
    }
    /**
     * Create a collection of all elements that do not pass a given truth test.
     *
     * @param  callable|mixed  $callback
     * @return static
     */
    public function reject($callback = true)
    {
    }
    /**
     * Return only unique items from the collection array using strict comparison.
     *
     * @param  string|callable|null  $key
     * @return static
     */
    public function uniqueStrict($key = null)
    {
    }
    /**
     * Collect the values into a collection.
     *
     * @return \FluentForm\Framework\Support\Collection
     */
    public function collect()
    {
    }
    /**
     * Get the collection of items as a plain array.
     *
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
    }
    /**
     * Get the collection of items as JSON.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
    }
    /**
     * Get a CachingIterator instance.
     *
     * @param  int  $flags
     * @return \CachingIterator
     */
    public function getCachingIterator($flags = \CachingIterator::CALL_TOSTRING)
    {
    }
    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Indicate that the model's string representation should be escaped when __toString is invoked.
     *
     * @param  bool  $escape
     * @return $this
     */
    public function escapeWhenCastingToString($escape = true)
    {
    }
    /**
     * Add a method to the list of proxied methods.
     *
     * @param  string  $method
     * @return void
     */
    public static function proxy($method)
    {
    }
    /**
     * Dynamically access collection proxies.
     *
     * @param  string  $key
     * @return mixed
     *
     * @throws \Exception
     */
    public function __get($key)
    {
    }
    /**
     * Results array of items from Collection or ArrayableInterface.
     *
     * @param  mixed  $items
     * @return array
     */
    protected function getArrayableItems($items)
    {
    }
    /**
     * Get an operator checker callback.
     *
     * @param  string  $key
     * @param  string|null  $operator
     * @param  mixed  $value
     * @return \Closure
     */
    protected function operatorForWhere($key, $operator = null, $value = null)
    {
    }
    /**
     * Determine if the given value is callable, but not a string.
     *
     * @param  mixed  $value
     * @return bool
     */
    protected function useAsCallable($value)
    {
    }
    /**
     * Get a value retrieving callback.
     *
     * @param  callable|string|null  $value
     * @return callable
     */
    protected function valueRetriever($value)
    {
    }
    /**
     * Make a function to check an item's equality.
     *
     * @param  mixed  $value
     * @return \Closure
     */
    protected function equality($value)
    {
    }
    /**
     * Make a function using another function, by negating its result.
     *
     * @param  \Closure  $callback
     * @return \Closure
     */
    protected function negate(\Closure $callback)
    {
    }
    /**
     * Make a function that returns what's passed to it.
     *
     * @return \Closure
     */
    protected function identity()
    {
    }
}
class Collection implements \ArrayAccess, \FluentForm\Framework\Support\CanBeEscapedWhenCastToString, \FluentForm\Framework\Support\Enumerable
{
    use \FluentForm\Framework\Support\EnumeratesValues, \FluentForm\Framework\Support\MacroableTrait;
    /**
     * Pass only key to any callback.
     */
    const USE_KEY = 1;
    /**
     * Pass both key/value to any callback.
     */
    const USE_BOTH = 2;
    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];
    /**
     * Create a new collection.
     *
     * @param  mixed  $items
     * @return void
     */
    public function __construct($items = [])
    {
    }
    /**
     * Create a new collection instance.
     * 
     * @param  array $items
     * @return static
     */
    public static function of($items)
    {
    }
    /**
     * Create a collection with the given range.
     *
     * @param  int  $from
     * @param  int  $to
     * @return static
     */
    public static function range($from, $to)
    {
    }
    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
    }
    /**
     * Get a lazy collection for the items in this collection.
     *
     * @return \FluentForm\Framework\Support\LazyCollection
     */
    public function lazy()
    {
    }
    /**
     * Get the average value of a given key.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function avg($callback = null)
    {
    }
    /**
     * Get the median of a given key.
     *
     * @param  string|array|null  $key
     * @return mixed
     */
    public function median($key = null)
    {
    }
    /**
     * Get the mode of a given key.
     *
     * @param  string|array|null  $key
     * @return array|null
     */
    public function mode($key = null)
    {
    }
    /**
     * Collapse the collection of items into a single array.
     *
     * @return static
     */
    public function collapse()
    {
    }
    /**
     * Determine if an item exists in the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function contains($key, $operator = null, $value = null)
    {
    }
    /**
     * Determine if an item is not contained in the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return bool
     */
    public function doesntContain($key, $operator = null, $value = null)
    {
    }
    /**
     * Cross join with the given lists, returning all possible permutations.
     *
     * @param  mixed  ...$lists
     * @return static
     */
    public function crossJoin(...$lists)
    {
    }
    /**
     * Get the items in the collection that are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diff($items)
    {
    }
    /**
     * Get the items in the collection that are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffUsing($items, callable $callback)
    {
    }
    /**
     * Get the items in the collection whose keys and values are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diffAssoc($items)
    {
    }
    /**
     * Get the items in the collection whose keys and values are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffAssocUsing($items, callable $callback)
    {
    }
    /**
     * Get the items in the collection whose keys are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diffKeys($items)
    {
    }
    /**
     * Get the items in the collection whose keys are not present in the given items, using the callback.
     *
     * @param  mixed  $items
     * @param  callable  $callback
     * @return static
     */
    public function diffKeysUsing($items, callable $callback)
    {
    }
    /**
     * Retrieve duplicate items from the collection.
     *
     * @param  callable|string|null  $callback
     * @param  bool  $strict
     * @return static
     */
    public function duplicates($callback = null, $strict = false)
    {
    }
    /**
     * Retrieve duplicate items from the collection using strict comparison.
     *
     * @param  callable|string|null  $callback
     * @return static
     */
    public function duplicatesStrict($callback = null)
    {
    }
    /**
     * Get the comparison function to detect duplicates.
     *
     * @param  bool  $strict
     * @return \Closure
     */
    protected function duplicateComparator($strict)
    {
    }
    /**
     * Get all items except for those with the specified keys.
     *
     * @param  \FluentForm\Framework\Support\Collection|mixed  $keys
     * @return static
     */
    public function except($keys)
    {
    }
    /**
     * Filter the collection using SQL like where.
     * 
     * @param  string $key
     * @param  string|null $operator
     * @param  mixed $value
     * @return static
     */
    public function where($key, $operator = null, $value = null)
    {
    }
    /**
     * Run a filter over each of the items.
     *
     * @param  callable|null  $callback
     * @return static
     */
    public function filter(?callable $callback = null)
    {
    }
    /**
     * Pass the items through a series of callbacks.
     * 
     * @param  array   $callbacks
     * @param  integer $mode
     * @return self
     */
    public function passThrough(array $callbacks, $mode = 0)
    {
    }
    /**
     * Get the first item from the collection passing the given truth test.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function first(?callable $callback = null, $default = null)
    {
    }
    /**
     * Get a flattened array of the items in the collection.
     *
     * @param  int|float  $depth
     * @return static
     */
    public function flatten($depth = INF)
    {
    }
    /**
     * Flip the items in the collection.
     *
     * @return static
     */
    public function flip()
    {
    }
    /**
     * Remove an item from the collection by key.
     *
     * @param  string|int|array  $keys
     * @return $this
     */
    public function forget($keys)
    {
    }
    /**
     * Get an item from the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
    }
    /**
     * Get an item from the collection by key or add it to collection if it does not exist.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return mixed
     */
    public function getOrPut($key, $value)
    {
    }
    /**
     * Group an associative array by a field or using a callback.
     *
     * @param  array|callable|string  $groupBy
     * @param  bool  $preserveKeys
     * @return static
     */
    public function groupBy($groupBy, $preserveKeys = false)
    {
    }
    /**
     * Key an associative array by a field or using a callback.
     *
     * @param  callable|string  $keyBy
     * @return static
     */
    public function keyBy($keyBy)
    {
    }
    /**
     * Determine if an item exists in the collection by key.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function has($key)
    {
    }
    /**
     * Determine if any of the keys exist in the collection.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function hasAny($key)
    {
    }
    /**
     * Concatenate values of a given key as a string.
     *
     * @param  string  $value
     * @param  string|null  $glue
     * @return string
     */
    public function implode($value, $glue = null)
    {
    }
    /**
     * Intersect the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersect($items)
    {
    }
    /**
     * Intersect the collection with the given items,
     * comparing both keys and values.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersectAssoc($items)
    {
    }
    /**
     * Intersect the collection with the given items by key.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersectByKeys($items)
    {
    }
    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty()
    {
    }
    /**
     * Determine if the collection contains a single item.
     *
     * @return bool
     */
    public function containsOneItem()
    {
    }
    /**
     * Join all items from the collection using a string. The final items can use a separate glue string.
     *
     * @param  string  $glue
     * @param  string  $finalGlue
     * @return string
     */
    public function join($glue, $finalGlue = '')
    {
    }
    /**
     * Get the keys of the collection items.
     *
     * @return static
     */
    public function keys()
    {
    }
    /**
     * Get the last item from the collection.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function last(?callable $callback = null, $default = null)
    {
    }
    /**
     * Get the values of a given key.
     *
     * @param  string|array|int|null  $value
     * @param  string|null  $key
     * @return static
     */
    public function pluck($value, $key = null)
    {
    }
    /**
     * Run a map over each of the items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function map(callable $callback)
    {
    }
    /**
     * Run a dictionary map over the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapToDictionary(callable $callback)
    {
    }
    /**
     * Run an associative map over each of the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param  callable  $callback
     * @return static
     */
    public function mapWithKeys(callable $callback)
    {
    }
    /**
     * Merge the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function merge($items)
    {
    }
    /**
     * Recursively merge the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function mergeRecursive($items)
    {
    }
    /**
     * Create a collection by using this collection for keys and another for its values.
     *
     * @param  mixed  $values
     * @return static
     */
    public function combine($values)
    {
    }
    /**
     * Union the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function union($items)
    {
    }
    /**
     * Create a new collection consisting of every n-th element.
     *
     * @param  int  $step
     * @param  int  $offset
     * @return static
     */
    public function nth($step, $offset = 0)
    {
    }
    /**
     * Get the items with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function only($keys)
    {
    }
    /**
     * Get and remove the last N items from the collection.
     *
     * @param  int  $count
     * @return mixed
     */
    public function pop($count = 1)
    {
    }
    /**
     * Push an item onto the beginning of the collection.
     *
     * @param  mixed  $value
     * @param  mixed  $key
     * @return $this
     */
    public function prepend($value, $key = null)
    {
    }
    /**
     * Push one or more items onto the end of the collection.
     *
     * @param  mixed  $values
     * @return $this
     */
    public function push(...$values)
    {
    }
    /**
     * Push all of the given items onto the collection.
     *
     * @param  iterable  $source
     * @return static
     */
    public function concat($source)
    {
    }
    /**
     * Get and remove an item from the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function pull($key, $default = null)
    {
    }
    /**
     * Put an item in the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return $this
     */
    public function put($key, $value)
    {
    }
    /**
     * Get one or a specified number of items randomly from the collection.
     *
     * @param  int|null  $number
     * @return static|mixed
     *
     * @throws \InvalidArgumentException
     */
    public function random($number = null)
    {
    }
    /**
     * Replace the collection items with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function replace($items)
    {
    }
    /**
     * Recursively replace the collection items with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function replaceRecursive($items)
    {
    }
    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse()
    {
    }
    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param  mixed  $value
     * @param  bool  $strict
     * @return mixed
     */
    public function search($value, $strict = false)
    {
    }
    /**
     * Get and remove the first N items from the collection.
     *
     * @param  int  $count
     * @return mixed
     */
    public function shift($count = 1)
    {
    }
    /**
     * Shuffle the items in the collection.
     *
     * @param  int|null  $seed
     * @return static
     */
    public function shuffle($seed = null)
    {
    }
    /**
     * Create chunks representing a "sliding window" view of the items in the collection.
     *
     * @param  int  $size
     * @param  int  $step
     * @return static
     */
    public function sliding($size = 2, $step = 1)
    {
    }
    /**
     * Skip the first {$count} items.
     *
     * @param  int  $count
     * @return static
     */
    public function skip($count)
    {
    }
    /**
     * Skip items in the collection until the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function skipUntil($value)
    {
    }
    /**
     * Skip items in the collection while the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function skipWhile($value)
    {
    }
    /**
     * Slice the underlying collection array.
     *
     * @param  int  $offset
     * @param  int|null  $length
     * @return static
     */
    public function slice($offset, $length = null)
    {
    }
    /**
     * Split a collection into a certain number of groups.
     *
     * @param  int  $numberOfGroups
     * @return static
     */
    public function split($numberOfGroups)
    {
    }
    /**
     * Split a collection into a certain number of groups, and fill the first groups completely.
     *
     * @param  int  $numberOfGroups
     * @return static
     */
    public function splitIn($numberOfGroups)
    {
    }
    /**
     * Get the first item in the collection, but only if exactly one item exists. Otherwise, throw an exception.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return mixed
     *
     * @throws \FluentForm\Framework\Support\ItemNotFoundException
     * @throws \FluentForm\Framework\Support\MultipleItemsFoundException
     */
    public function sole($key = null, $operator = null, $value = null)
    {
    }
    /**
     * Get the first item in the collection but throw an exception if no matching items exist.
     *
     * @param  mixed  $key
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return mixed
     *
     * @throws \FluentForm\Framework\Support\ItemNotFoundException
     */
    public function firstOrFail($key = null, $operator = null, $value = null)
    {
    }
    /**
     * Chunk the collection into chunks of the given size.
     *
     * @param  int  $size
     * @return static
     */
    public function chunk($size)
    {
    }
    /**
     * Chunk the collection into chunks with a callback.
     *
     * @param  callable  $callback
     * @return static
     */
    public function chunkWhile(callable $callback)
    {
    }
    /**
     * Sort through each item with a callback.
     *
     * @param  callable|int|null  $callback
     * @return static
     */
    public function sort($callback = null)
    {
    }
    /**
     * Sort items in descending order.
     *
     * @param  int  $options
     * @return static
     */
    public function sortDesc($options = SORT_REGULAR)
    {
    }
    /**
     * Sort the collection using the given callback.
     *
     * @param  callable|array|string  $callback
     * @param  int  $options
     * @param  bool  $descending
     * @return static
     */
    public function sortBy($callback, $options = SORT_REGULAR, $descending = false)
    {
    }
    /**
     * Sort the collection using multiple comparisons.
     *
     * @param  array  $comparisons
     * @return static
     */
    protected function sortByMany(array $comparisons = [])
    {
    }
    /**
     * Sort the collection in descending order using the given callback.
     *
     * @param  callable|string  $callback
     * @param  int  $options
     * @return static
     */
    public function sortByDesc($callback, $options = SORT_REGULAR)
    {
    }
    /**
     * Sort the collection keys.
     *
     * @param  int  $options
     * @param  bool  $descending
     * @return static
     */
    public function sortKeys($options = SORT_REGULAR, $descending = false)
    {
    }
    /**
     * Sort the collection keys in descending order.
     *
     * @param  int  $options
     * @return static
     */
    public function sortKeysDesc($options = SORT_REGULAR)
    {
    }
    /**
     * Sort the collection keys using a callback.
     *
     * @param  callable  $callback
     * @return static
     */
    public function sortKeysUsing(callable $callback)
    {
    }
    /**
     * Splice a portion of the underlying collection array.
     *
     * @param  int  $offset
     * @param  int|null  $length
     * @param  mixed  $replacement
     * @return static
     */
    public function splice($offset, $length = null, $replacement = [])
    {
    }
    /**
     * Take the first or last {$limit} items.
     *
     * @param  int  $limit
     * @return static
     */
    public function take($limit)
    {
    }
    /**
     * Take items in the collection until the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function takeUntil($value)
    {
    }
    /**
     * Take items in the collection while the given condition is met.
     *
     * @param  mixed  $value
     * @return static
     */
    public function takeWhile($value)
    {
    }
    /**
     * Transform each item in the collection using a callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function transform(callable $callback)
    {
    }
    /**
     * Flattens a multi-dimensional collection into
     * a single level collection with dots.
     *
     * @return static
     */
    public function dot()
    {
    }
    /**
     * Convert a flatten "dot" notation array into an expanded array.
     *
     * @return static
     */
    public function undot()
    {
    }
    /**
     * Return only unique items from the collection array.
     *
     * @param  string|callable|null  $key
     * @param  bool  $strict
     * @return static
     */
    public function unique($key = null, $strict = false)
    {
    }
    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values()
    {
    }
    /**
     * Zip the collection together with one or more arrays.
     *
     * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
     *      => [[1, 4], [2, 5], [3, 6]]
     *
     * @param  mixed  ...$items
     * @return static
     */
    public function zip($items)
    {
    }
    /**
     * Pad collection to the specified length with a value.
     *
     * @param  int  $size
     * @param  mixed  $value
     * @return static
     */
    public function pad($size, $value)
    {
    }
    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
    }
    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
    }
    /**
     * Count the number of items in the collection by a field or using a callback.
     *
     * @param  callable|string  $countBy
     * @return static
     */
    public function countBy($countBy = null)
    {
    }
    /**
     * Add an item to the collection.
     *
     * @param  mixed  $item
     * @return $this
     */
    public function add($item)
    {
    }
    /**
     * Get a base Support collection instance from this collection.
     *
     * @return \FluentForm\Framework\Support\Collection
     */
    public function toBase()
    {
    }
    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($key)
    {
    }
    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
    }
    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
    }
    /**
     * Unset the item at a given offset.
     *
     * @param  mixed  $key
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($key)
    {
    }
}
/**
 * @mixin \FluentForm\Framework\Support\Enumerable
 */
class HigherOrderCollectionProxy
{
    /**
     * The collection being operated on.
     *
     * @var \FluentForm\Framework\Support\Enumerable
     */
    protected $collection;
    /**
     * The method being proxied.
     *
     * @var string
     */
    protected $method;
    /**
     * Create a new proxy instance.
     *
     * @param  \FluentForm\Framework\Support\Enumerable  $collection
     * @param  string  $method
     * @return void
     */
    public function __construct(\FluentForm\Framework\Support\Enumerable $collection, $method)
    {
    }
    /**
     * Proxy accessing an attribute onto the collection items.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Proxy a method call onto the collection items.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
    }
}
namespace FluentForm\Framework\Helpers;

class ArrayHelper extends \FluentForm\Framework\Support\Arr
{
    /**
     * Return the default value of the given value.
     *
     * @param  mixed $value
     * @return mixed
     */
    public static function value($value)
    {
    }
    public static function isTrue($array, $key)
    {
    }
}