<?php

namespace FluentForm\App\Databases\Migrations {
    class FormSubmissionMeta
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class FormMeta
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class ScheduledActions
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class FormSubmissionDetails
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class FormSubmissions
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate($force = false)
        {
        }
    }
    class FormLogs
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class FormAnalytics
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class Forms
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
}

namespace FluentForm\App\Databases {
    class DatabaseMigrator
    {
        public static function run()
        {
        }
    }
}

namespace FluentForm\Framework\Foundation {
    abstract class Provider
    {
        /**
         * $app \Framework\Foundation\Application
         * @var null
         */
        protected $app = null;
        /**
         * Build the instance
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Booted method for any provider
         * @return void
         */
        public function booted()
        {
        }
        /**
         * Abstract booting method for provider
         * @return void
         */
        public abstract function booting();
    }
}

namespace FluentForm\App\Providers {
    class MigratorProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
        public function booted()
        {
        }
    }
    /**
     * This provider will be loaded only on frontend (public)
     */
    class FrontendProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class WpFluentProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    class FormBuilderProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class CommonProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class FluentValidatorProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    /**
     * This provider will be loaded only on backend (admin)
     */
    class BackendProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class MenuProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function booting()
        {
        }
    }
    class FluentConversationalProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
        public function booted()
        {
        }
    }
    class AdminNoticeProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
}

namespace FluentForm\App\Api {
    class FormProperties
    {
        public function __construct($form)
        {
        }
        /**
         * Get Form formatted inputs
         * @param string[] $with
         * @return array
         */
        public function inputs($with = ['admin_label', 'raw'])
        {
        }
        /**
         * Get Form Input labels
         * @return array
         */
        public function labels()
        {
        }
        /**
         * Get Form Fields
         * @return array
         */
        public function fields()
        {
        }
        /**
         * Get Form Settings
         * @return array
         */
        public function settings()
        {
        }
        /**
         * Get Email Notifications as an array
         * @return array
         * @throws \WpFluent\Exception
         */
        public function emailNotifications()
        {
        }
        /**
         * get Form metas
         * @param $metaName
         * @param false $default
         * @return mixed|string
         */
        public function meta($metaName, $default = false)
        {
        }
        /**
         * get form renerable pass settings as an array
         * @return array
         */
        public function renderable()
        {
        }
        public function conversionRate()
        {
        }
        public function submissionCount()
        {
        }
        public function viewCount()
        {
        }
        public function unreadCount()
        {
        }
        public function __get($name)
        {
        }
    }
    class Submission
    {
        public function get($args = [])
        {
        }
        public function find($submissionId)
        {
        }
        public function transactions($columnValue, $column = 'submission_id')
        {
        }
        public function transaction($columnValue, $column = 'id')
        {
        }
        public function subscriptions($submissionId, $withTransactions = false)
        {
        }
        public function getSubscription($subscriptionId, $withTransactions = false)
        {
        }
        public function transactionsByUserId($userId = false, $args = [])
        {
        }
        public function transactionsBySubscriptionId($subscriptionId)
        {
        }
        public function transactionsBySubmissionId($submissionId)
        {
        }
        public function subscriptionsByUserId($userId = false, $args = [])
        {
        }
    }
    class Entry
    {
        public function __construct($form)
        {
        }
        public function entries($atts = [], $includeFormats = false)
        {
        }
        public function entry($entryId, $includeFormats = false)
        {
        }
        public function report($statuses = [])
        {
        }
    }
    class Form
    {
        public function forms($atts = [], $withFields = false)
        {
        }
        public function find($formId)
        {
        }
        /**
         * get Form Properties instance
         * @param int|object $form
         * @return \FluentForm\App\Api\FormProperties
         */
        public function form($form)
        {
        }
        public function entryInstance($form)
        {
        }
    }
}

namespace FluentForm\App\Modules\Settings {
    /**
     * Global Settings
     *
     * @package FluentForm\App\Modules\Settings
     */
    class Settings
    {
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * Settings constructor.
         *
         * @param \FluentForm\Framework\Request\Request $request
         */
        public function __construct(\FluentForm\Framework\Request\Request $request)
        {
        }
        /**
         * Get a global settings for an specified key.
         */
        public function get()
        {
        }
        public function store()
        {
        }
        public function storeReCaptcha()
        {
        }
        public function storeHCaptcha()
        {
        }
        public function storeTurnstile()
        {
        }
        public function storeSaveGlobalLayoutSettings()
        {
        }
        public function storeMailChimpSettings()
        {
        }
        public function storeEmailSummarySettings()
        {
        }
    }
}

namespace FluentForm\App\Modules\Renderer\GlobalSettings {
    class Settings
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * GlobalSettings constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Render the page for native global settings components
         *
         * @throws \Exception
         */
        public function render()
        {
        }
        /**
         * Enqueue necessary resources.
         *
         * @throws \Exception
         */
        public function enqueue()
        {
        }
    }
}

namespace FluentForm\App\Modules\Form\Settings\Validator {
    class Validator
    {
        /**
         * Centralized validator for all the settings data.
         *
         * @param $key
         * @param array $data
         */
        public static function validate($key, $data = [])
        {
        }
    }
    class Pdfs
    {
        /**
         * Validates mailchimp feed settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param FluentValidator $validator
         *
         * @return FluentValidator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
        {
        }
    }
    class Notifications
    {
        /**
         * Validates notifications settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param FluentValidator $validator
         *
         * @return FluentValidator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
        {
        }
    }
    class Confirmations
    {
        /**
         * Validates confirmations settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param FluentValidator $validator
         *
         * @return FluentValidator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
        {
        }
    }
    class MailChimps
    {
        /**
         * Validates mailchimp feed settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param FluentValidator $validator
         *
         * @return FluentValidator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
        {
        }
    }
}

namespace FluentForm\App\Modules\Form\Settings {
    class FormCssJs
    {
        public function addCssJs($formId)
        {
        }
        public function getCss($formId)
        {
        }
        public function getJs($formId)
        {
        }
        public function addCss($formId, $css, $cssId = 'fluentform_custom_css')
        {
        }
        public function addJs($formId, $customJS)
        {
        }
        /**
         * Get settings for a particular form by id
         * @return void
         */
        public function getSettingsAjax()
        {
        }
        /**
         * Save settings for a particular form by id
         * @return void
         */
        public function saveSettingsAjax()
        {
        }
        protected function escCss($css)
        {
        }
        protected function getData($formId, $metaKey)
        {
        }
        protected function store($formId, $metaKey, $metaValue)
        {
        }
    }
    class FormSettings
    {
        /**
         * Construct the object
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get settings for a particular form by id
         * @return void
         */
        public function index()
        {
        }
        public function getGeneralSettingsAjax()
        {
        }
        public function saveGeneralSettingsAjax()
        {
        }
        /**
         * Save settings/meta for a form in database
         */
        public function store()
        {
        }
        /**
         * Delete settings/meta from database for a given form
         * @return void
         */
        public function remove()
        {
        }
    }
    class ExtraSettings
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler
         */
        protected $form_model;
        /**
         * Construct the object
         * @throws \Exception
         * @return  void
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get extra settig navigations
         * @return void
         */
        public function getExtraSettingNavs()
        {
        }
        /**
         * Get extra settigs component
         * @return void
         */
        public function getExtraSettingsComponent()
        {
        }
        /**
         * Get trello settigs
         * @return void
         */
        public function getTrelloSettingsComponent($component, $formId)
        {
        }
    }
    class EntryColumnViewSettings
    {
        /**
         * Save settings for visible entry columns
         * @return void
         */
        public function saveVisibleColumnsAjax()
        {
        }
        /**
         * Save settings for entry column display order
         */
        public function saveEntryColumnsOrderAjax()
        {
        }
        /**
         * Reset column display order settings
         */
        public function resetEntryDisplaySettings()
        {
        }
        protected function store($formId, $metaKey, $metaValue)
        {
        }
    }
}

namespace FluentForm\App\Modules\Form {
    class FormDataParser
    {
        protected static $data = null;
        public static function parseFormEntries($entries, $form, $fields = null)
        {
        }
        public static function parseFormEntry($entry, $form, $fields = null, $isHtml = false)
        {
        }
        public static function parseFormSubmission($submission, $form, $fields, $isHtml = false)
        {
        }
        public static function parseData($response, $fields, $formId, $isHtml = false)
        {
        }
        public static function formatValue($value)
        {
        }
        public static function formatFileValues($values, $isHtml, $form_id = null)
        {
        }
        public static function formatImageValues($values, $isHtml, $form_id = null)
        {
        }
        public static function formatRepeatFieldValue($value, $field, $form_id)
        {
        }
        public static function formatTabularGridFieldValue($value, $field, $form_id, $isHtml = false)
        {
        }
        public static function makeTabularData($data)
        {
        }
        /**
         * Format input_name field value by concatenating all name fields.
         *
         * @param array|object $value
         *
         * @return string $value
         */
        public static function formatName($value)
        {
        }
        public static function formatCheckBoxValues($values, $field, $isHtml = false)
        {
        }
        public static function resetData()
        {
        }
    }
    class Inputs
    {
        /**
         * Build the class instance
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get all the flatten form inputs for shortcode generation.
         */
        public function index()
        {
        }
        public function supportedConditionalFields()
        {
        }
        public function filterEditorFields($fields)
        {
        }
    }
    class Transfer
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * Transfer constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Export forms as JSON.
         */
        public function export()
        {
        }
        /**
         * Import forms from a previously exported JSON file.
         */
        public function import()
        {
        }
        public function getFormMetas($formId)
        {
        }
    }
    class AkismetHandler
    {
        public static function isEnabled()
        {
        }
        public static function isPluginEnabled()
        {
        }
        public static function isSpamSubmission($formData, $form)
        {
        }
        protected static function getAkismetFields($data, $form)
        {
        }
    }
    class FormHandler
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * @var array $formData
         */
        protected $formData;
        /**
         * The Fluent Forms object.
         *
         * @var \stdClass
         */
        protected $form;
        /**
         * Form Handler constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Set the form using it's ID.
         *
         * @param $formId
         * @return $this
         */
        public function setForm($formId)
        {
        }
        /**
         * Handle form submition
         */
        public function onSubmit()
        {
        }
        public function processFormSubmissionData($insertId, $formData, $form)
        {
        }
        public function getReturnData($insertId, $form, $formData)
        {
        }
        /**
         * Validate nonce.
         */
        protected function validateNonce()
        {
        }
        protected function handleSpamError()
        {
        }
        protected function isSpam($formData, $form)
        {
        }
        /**
         * Prepare the data to be inserted to the database.
         *
         * @param boolean $formData
         * @return array
         */
        public function prepareInsertData($formData = false)
        {
        }
        /**
         * Delegate the validation rules & messages to the
         * ones that the validation library recognizes.
         *
         * @param  $rules
         * @param  $messages
         * @return array
         */
        protected function delegateValidations($rules, $messages, $search = [], $replace = [])
        {
        }
        /**
         * Prevents malicious attacks when the submission
         * count exceeds in an allowed interval.
         */
        public function preventMaliciousAttacks()
        {
        }
    }
    class Analytics
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Build the instance
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Save form view analytics data
         * 
         * @return json respoonse
         */
        public function record($formId)
        {
        }
        public function resetFormAnalytics()
        {
        }
    }
    class Form
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * Set this value when we need predefined default settings.
         *
         * @var array $defaultSettings
         */
        protected $defaultSettings;
        /**
         * Set this value when we need predefined default notifications.
         *
         * @var array $defaultNotifications
         */
        protected $defaultNotifications;
        /**
         * Set this value when we need predefined form fields.
         *
         * @var array $formFields
         */
        protected $formFields;
        protected $metas = [];
        protected $formType = 'form';
        protected $hasPayment = 0;
        /**
         * Form constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         *
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get all forms from database
         *
         * @return  void
         * @throws \Exception
         */
        public function index()
        {
        }
        /**
         * Create a form from backend/editor
         * @return void|array
         */
        public function store($returnJSON = true)
        {
        }
        public function getFormsDefaultSettings($formId = false)
        {
        }
        public function getAdvancedValidationSettings($formId)
        {
        }
        public function getMeta($formId, $metaKey, $isJson = true)
        {
        }
        public function updateMeta($formId, $metaKey, $metaValue)
        {
        }
        public function deleteMeta($formId, $metaKey)
        {
        }
        /**
         * Find/Read a from from the database
         * @return void
         */
        public function find()
        {
        }
        /**
         * Fetch a from from the database
         * Note: required for ninja-tables
         * @return mixed
         */
        public function fetchForm($formId)
        {
        }
        /**
         * Save/update a form from backend/editor
         * @return void
         * @throws \WpFluent\Exception
         */
        public function update()
        {
        }
        /**
         * Delete a from from database
         * @return void
         * @throws \WpFluent\Exception
         */
        public function delete()
        {
        }
        protected function deleteFormAssests($formId)
        {
        }
        /**
         * Duplicate a from
         * @return void
         * @throws \WpFluent\Exception
         */
        public function duplicate()
        {
        }
        public function convertToConversational()
        {
        }
        public function getAllForms()
        {
        }
    }
    class Predefined extends \FluentForm\App\Modules\Form\Form
    {
        /**
         * Fetch simplified information for all predefined forms
         */
        public function all()
        {
        }
        /**
         * Create a predefined form
         * @param $name
         */
        public function create()
        {
        }
        public function createForm($predefinedForm, $predefinedName = '')
        {
        }
    }
    class HoneyPot
    {
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function renderHoneyPot($form)
        {
        }
        public function verify($insertData, $requestData, $formId)
        {
        }
        public function isEnabled($formId = false)
        {
        }
    }
    /**
     * @method array getShortCodeInputs(\stdClass $form, array $with = ['admin_label'])
     * @method array getValidations(\stdClass $form, array $inputs, array $fields = [])
     * @method array getElement(\stdClass $form, string|array $name, array $with = [])
     * @method boolean hasElement(\stdClass $form, string $name)
     * @method boolean hasPaymentFields(\stdClass $form)
     * @method array getPaymentFields(\stdClass $form, $with = [])
     * @method array getPaymentInputFields(\stdClass $form, $with = [])
     * @method array getAttachmentInputFields(\stdClass $form, $with = [])
     * @method boolean hasRequiredFields(\stdClass $form, array $fields)
     * @method array getInputsByElementTypes(\stdClass $form, array $elements, array $with = [])
     * @method array|null getField(\stdClass $form, string|array $element, string|array $attribute, array $with = [])
     */
    class FormFieldsParser
    {
        protected static $forms = [];
        protected static $formsWith = [];
        public static function maybeResetForm($form, $with)
        {
        }
        public static function getFields($form, $asArray = false)
        {
        }
        public static function getInputs($form, $with = [])
        {
        }
        public static function getEntryInputs($form, $with = ['admin_label', 'raw'])
        {
        }
        public static function parse($key, $form, $with)
        {
        }
        public static function getAdminLabels($form, $fields = [])
        {
        }
        /**
         * Deligate dynamic static method calls to FormParser method.
         * And set the result to the store before returning to dev.
         *
         * @param  string $method
         * @param  array  $parameters
         * @return mixed
         */
        public static function __callStatic($method, $parameters)
        {
        }
        public static function resetData()
        {
        }
    }
}

namespace FluentForm\App\Modules\Track {
    class SetupModule
    {
        public function installPlugin($repoSlug)
        {
        }
    }
    class TrackModule
    {
        // 7 days
        public function initTrack()
        {
        }
        public function showInitialConsent()
        {
        }
        public function rejectTrack()
        {
        }
        public function sendInitialInfo()
        {
        }
        public function getInitialNotice()
        {
        }
    }
}

namespace FluentForm\App\Modules\Entries {
    class EntryQuery
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        protected $formModel;
        protected $responseModel;
        protected $formId = false;
        protected $per_page = 10;
        protected $page_number = 1;
        protected $status = false;
        protected $is_favourite = null;
        protected $sort_by = 'ASC';
        protected $search = false;
        protected $wheres = array();
        protected $startDate;
        protected $endDate;
        public function __construct()
        {
        }
        public function getResponses()
        {
        }
        public function getResponse($entryId)
        {
        }
        public function getNextResponse($entryId)
        {
        }
        public function getPrevResponse($entryId)
        {
        }
        protected function getNextPrevEntryQuery()
        {
        }
        public function groupCount($form_id)
        {
        }
    }
    class Entries extends \FluentForm\App\Modules\Entries\EntryQuery
    {
        /**
         * The form response model.
         *
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler $responseMetaModel
         */
        protected $responseMetaModel;
        /**
         * Entries constructor.
         *
         * @throws \Exception
         */
        public function __construct()
        {
        }
        public function getAllFormEntries()
        {
        }
        public function getEntriesReport()
        {
        }
        public function renderEntries($form_id)
        {
        }
        public function getEntriesGroup()
        {
        }
        public function _getEntries($formId, $currentPage, $perPage, $sortBy, $entryType, $search, $wheres = [])
        {
        }
        public function getEntries()
        {
        }
        public function _getEntry()
        {
        }
        public function getEntry()
        {
        }
        /**
         * @param       $form
         * @param array $with
         *
         * @return array
         * @todo: Implement Caching mechanism so we don't have to parse these things for every request
         */
        public function getFormInputsAndLabels($form, $with = ['admin_label', 'raw'])
        {
        }
        public function getNotes()
        {
        }
        public function addNote()
        {
        }
        public function changeEntryStatus()
        {
        }
        public function deleteEntry()
        {
        }
        public function deleteEntryById($entryId, $formId = false)
        {
        }
        public function favoriteChange()
        {
        }
        public function handleBulkAction()
        {
        }
        public function recordEntryDetails($entryId, $formId, $data)
        {
        }
        public function updateEntryDiffs($entryId, $formId, $formData)
        {
        }
        public function getUsers()
        {
        }
        public function changeEntryUser()
        {
        }
        public function getAvailableForms()
        {
        }
    }
    class Export
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * @var String table/data source name
         */
        protected $tableName;
        /**
         * Export constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application, $tableName = 'fluentform_submissions')
        {
        }
        /**
         * Exports form entries as CSV.
         *
         * @todo:: refactor.
         */
        public function index()
        {
        }
    }
    class Report
    {
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * @param bool $formId
         */
        public function getReport($formId = false)
        {
        }
        public function generateReport($form, $statuses = [])
        {
        }
        public function getInputReport($formId, $fieldNames, $whereClasuses)
        {
        }
        public function getSubFieldInputReport($formId, $fieldNames, $whereClasuses)
        {
        }
        protected function getFormattedReportsForSubInputs($reports, $formId, $whereClasuses)
        {
        }
        protected function setReportForSubInput($report, &$formattedReports)
        {
        }
        public function getEntryTotal($fieldName, $formId, $whereClasuses)
        {
        }
    }
}

namespace FluentForm\App\Modules\Logger {
    class DataLogger
    {
        public $app;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function getLogFilters()
        {
        }
        public function log($data)
        {
        }
        public function getLogsByEntry($entry_id, $log_type = 'logs', $sourceType = 'submission_item')
        {
        }
        public function getAllLogs()
        {
        }
        public function getApiLogs()
        {
        }
        public function deleteLogsByIds($ids = [])
        {
        }
        public function deleteApiLogsByIds($ids = [])
        {
        }
        public function retryApiAction()
        {
        }
        public function getApiLogFilters()
        {
        }
    }
}

namespace FluentForm\App\Modules {
    class EditorButtonModule
    {
        public function addButton()
        {
        }
    }
}

namespace FluentForm\App\Modules\Registerer {
    class TranslationString
    {
        public static function getAdminI18n()
        {
        }
        public static function getSettingsI18n()
        {
        }
        public static function getGlobalSettingsI18n()
        {
        }
        public static function getEditorI18n()
        {
        }
        public static function getEntriesI18n()
        {
        }
        public static function getAddOnModuleI18n()
        {
        }
        public static function getTransferModuleI18n()
        {
        }
        public static function getPaymentsI18n()
        {
        }
    }
    class Menu
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Menu constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function reisterScripts()
        {
        }
        public function isFluentPages()
        {
        }
        public function enqueuePageScripts()
        {
        }
        /**
         * Register menu and sub-menus.
         */
        public function register()
        {
        }
        public function renderFormAdminRoute()
        {
        }
        public function renderAllEntriesAdminRoute()
        {
        }
        public function renderFormInnerPages()
        {
        }
        public function renderSettings($form_id)
        {
        }
        /**
         * Remove the inactive addOn menu items
         * @param string $addOn
         * @return boolean
         */
        public function filterFormSettingsMenu($settingsMenus, $form_id)
        {
        }
        public function renderFormSettings($form_id)
        {
        }
        public function renderForms()
        {
        }
        public function renderEditor($form_id)
        {
        }
        public function renderDocs()
        {
        }
        public function renderAddOns()
        {
        }
        /**
         * Render global settings page.
         *
         * @throws \Exception
         */
        public function renderGlobalSettings()
        {
        }
        public function renderTransfer()
        {
        }
        public function addPreviewButton($formId)
        {
        }
        public function addCopyShortcodeButton($formId)
        {
        }
        public function commonAction()
        {
        }
        public function renderGlobalMenu()
        {
        }
        public function renderPaymentEntries()
        {
        }
        public function renderSmtpPromo()
        {
        }
    }
}

namespace FluentForm\App\Modules\HCaptcha {
    class HCaptcha
    {
        /**
         * Verify hCaptcha response.
         *
         * @param string $token response from the user.
         * @param null $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret = null)
        {
        }
    }
}

namespace FluentForm\App\Modules {
    class Activator
    {
        /**
         * This method will be called on plugin activation
         * @return void
         */
        public function handleActivation($network_wide)
        {
        }
        public function migrate()
        {
        }
        public function maybeMigrateDB()
        {
        }
        public function migrateGlobalAddOns()
        {
        }
        public static function setCronSchedule()
        {
        }
        public static function maybeMigrateDefaultForms()
        {
        }
    }
    class AddOnModule
    {
        /**
         * The number of days we'll cached the add-ons got from remote server.
         *
         * @var integer
         */
        protected $cacheDays = 1;
        /**
         * The URL to fetch the add-ons
         *
         * @var string
         */
        protected $addOnsFetchUrl = 'https://wpmanageninja.com/add-ons.json';
        /**
         * Render the add-ons list page.
         */
        public function render()
        {
        }
        /**
         * Show the add-ons list.
         */
        public function showFluentAddOns()
        {
        }
        public function updateAddOnsStatus()
        {
        }
        public function getPremiumAddOns()
        {
        }
    }
}

namespace FluentForm\App\Modules\Component {
    trait ComponentInitTrait
    {
        /**
         * Initialize the component and register the
         * component by registering actions/filters.
         */
        public function _init()
        {
        }
        /**
         * Validate certain required properties
         * 
         * @return void
         */
        private function _fluentFormValidateComponent()
        {
        }
        /**
         * Add the component in fluentform editor's components array.
         *
         * @param  array $components
         * @return array $components
         */
        public function _fluentEditorComponenstCallback($components)
        {
        }
        /**
         * Add the keywords for the component to search in the editor.
         * 
         * @param  array $keywords
         * @return array $keywords
         */
        public function _fluentEditorElementSearchTagsCallback($keywords)
        {
        }
        /**
         * Configure placements of input customization options in editor.
         * 
         * @param  array $placemenSettings
         * @return array $placemenSettings
         */
        public function _fluentEditorElementSettingsPlacementCallback($placementSettings)
        {
        }
        /**
         * Configure input customization options/items in the editor.
         * 
         * @param  array $customizationSettings
         * @return array $customizationSettings
         */
        public function _fluentEditorElementCustomizationSettingsCallback($customizationSettings)
        {
        }
        /**
         * Prepare the submission data for the element on Form Submission.
         *
         * @param  array $formData
         * @param  int   $formId
         * @param  array $inputConfigs
         * @return array $formData
         */
        public function _fluentformInsertResponseDataCallback($formData, $formId, $inputConfigs)
        {
        }
        /**
         * Add the component type in fluentform field
         * types to be available in FormFieldParser.
         * 
         * @param  array $types
         * @return array $types
         */
        public function _fluentformFormInputTypesCallback($types)
        {
        }
        /**
         * Render the component.
         *
         * @param array $data
         * @param stdClass $form
         * @return void
         */
        public function _elementRenderHookCallback($item, $form)
        {
        }
        /**
         * Element's entry value transformation.
         * 
         * @param  mixed $value
         * @param  string $field
         * @param  int $formId
         * @return mixed $value
         */
        public function _elementEntryFormatCallback($value, $field, $formId)
        {
        }
    }
    abstract class BaseComponent
    {
        use \FluentForm\App\Modules\Component\ComponentInitTrait;
        /**
         * The unique name of the component.
         * 
         * @return string
         */
        public abstract function name();
        /**
         * The label of the component.
         * 
         * @return string
         */
        public abstract function label();
        /**
         * The element type of the component from already
         * available elements (input_text, textarea e.t.c).
         * 
         * @return string
         */
        public abstract function element();
        /**
         * The template type of the component to display preview in editor dropzone from
         * already available templates (inputText, selectCountry, addressFields e.t.c).
         * 
         * @return string
         */
        public abstract function template();
        /**
         * Render the element on frontend form.
         * 
         * @param  array $component Element Config
         * @param  object $form The Form Object
         * 
         * @return void
         */
        public abstract function render($component, $form);
        /**
         * Form submission callback.
         * 
         * @param  array $formData Submitted form data
         * @param  int $formId Submitted form id
         * @param  array $config Form elements config
         * 
         * @return array $formData
         */
        public abstract function onSubmit($formData, $formId, $config);
        /**
         * Component position in editor. If null is returned then
         * the element will be pushed at last but the derived class
         * will override this method if any customization is needed.
         * 
         * @return int|null
         */
        public function index()
        {
        }
        /**
         * The group, where the component should be added. By default,
         * the element will be added in "general" group and the derived
         *  class will override this method if any customization is needed.
         * 
         * @return string general|advanced|container
         */
        public function group()
        {
        }
        /**
         * The element icon class for the component to display in the button in
         * the editor element list which is mapped to editor_options.icon_class.
         * 
         * @return string
         */
        public function elementIconClass()
        {
        }
        /**
         * Element editor/form attributes and the derived class will
         * override this method if any customization is needed.
         *
         * @param  array $dafault
         * @return array $default
         */
        public function attributes($default)
        {
        }
        /**
         * Element editor settings and the derived class will
         * override this method if any customization is needed.
         * 
         * @param  array $dafault
         * @return array $default
         */
        public function settings($default)
        {
        }
        /**
         * Element editor options and the derived class will
         * override this method if any customization is needed.
         * 
         * @param  array $dafault
         * @return array $default
         */
        public function options($default)
        {
        }
        /**
         * Element's form submission validation rules and the derived
         * class will override this method if needed any customization.
         * 
         * @return array
         */
        public function validationRules()
        {
        }
        /**
         * Element editor placement settings and the derived class
         * will override this method if any customization is needed.
         * 
         * @param array $placemenSettings
         * @return array $placemenSettings
         */
        public function placementSettings($placemenSettings)
        {
        }
        /**
         * The customization for the component and derived class can
         * override this method if any customization is needed.
         * 
         * @param  array $customizationSettings
         * @return array $customizationSettings
         */
        public function customizationSettings($customizationSettings)
        {
        }
        /**
         * Add the component type in fluentform field types to
         * be available in FormFieldParser and derived class can
         * override this method if any customization is needed.
         * 
         * @param  array $types
         * @return array $types
         */
        public function addType($types)
        {
        }
        /**
         * The keywords to search the element in the editor and
         * the derived class will override this method if needed.
         * 
         * @return array
         */
        public function searchBy()
        {
        }
        /**
         * Transform the element's submitted value saved in database
         * to show it properly/formatted in entry page if needed and 
         * this method implementation optional so a default method is
         * implemented here and original value is returned. In any case
         * if any customization of the value is needed then the derived
         * class will override it and will format and return the the value.
         * 
         * @param  mixed $value   [description]
         * @param  string $field
         * @param  int $formId
         * @return mixed $value
         */
        public function formatEntryValue($value, $field, $formId)
        {
        }
    }
    class Component
    {
        /**
         * FluentForm\Framework\Foundation\Application
         *
         * @var $app
         */
        protected $app = null;
        /**
         * Determine whether to register Elementor PopUp handler.
         *
         * @var bool
         */
        protected $elementorPopUpHandler = false;
        /**
         * Biuld the instance of this class
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function registerScripts()
        {
        }
        protected function maybeLoadFluentFormStyles()
        {
        }
        /**
         * Get all the available components
         *
         * @return  void
         * @throws \Exception
         * @throws \FluentForm\Framework\Exception\UnResolveableEntityException
         */
        public function index()
        {
        }
        /**
         * Get available shortcodes for editor
         *
         * @return void
         * @throws \Exception
         */
        public function getEditorShortcodes()
        {
        }
        /**
         * Get all available shortcodes for editor
         *
         * @return void
         * @throws \Exception
         */
        public function getAllEditorShortcodes()
        {
        }
        /**
         * Register the form renderer shortcode
         *
         * @return  void
         */
        public function addFluentFormShortCode()
        {
        }
        public function renderForm($atts)
        {
        }
        /**
         * Process the output HTML to generate the default values.
         *
         * @param string $output
         * @param \stdClass $form
         * @return string
         */
        public function replaceEditorSmartCodes($output, $form)
        {
        }
        /**
         * Register renderer actions for compiling each element
         *
         * @return  void
         */
        public function addRendererActions()
        {
        }
        /**
         * Register dynamic value shortcode parser (filter default value)
         *
         * @return  void
         */
        public function addFluentFormDefaultValueParser()
        {
        }
        /**
         * Register filter to check whether the form is renderable
         *
         * @return  mixed
         */
        public function addIsRenderableFilter()
        {
        }
        /**
         * Register fluentform_submission_inserted actions
         *
         * @return  void
         */
        public function addFluentformSubmissionInsertedFilter()
        {
        }
        public static function getDatei18n()
        {
        }
        protected function maybeHasAdvandedFields($form, $formBuilder)
        {
        }
        public function registerInputSanitizers()
        {
        }
        public function getNumericInputValue($value, $field)
        {
        }
    }
}

namespace FluentForm\App\Modules\CLI {
    class Commands
    {
        public function stats($args, $assoc_args)
        {
        }
        public function activate_license($args, $assoc_args)
        {
        }
        public function license_status()
        {
        }
    }
}

namespace FluentForm\App\Modules\Turnstile {
    class Turnstile
    {
        /**
         * Verify turnstile response.
         *
         * @param string $token response from the user.
         * @param null $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret)
        {
        }
    }
}

namespace FluentForm\App\Modules {
    class DocumentationModule
    {
        public function render()
        {
        }
    }
}

namespace FluentForm\App\Modules\ReCaptcha {
    class ReCaptcha
    {
        /**
         * Verify reCaptcha response.
         *
         * @param string $token response from the user.
         * @param null $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret = null, $version = 'v2_visible')
        {
        }
    }
}

namespace FluentForm\App\Modules {
    class ProcessExteriorModule
    {
        public function handleExteriorPages()
        {
        }
        public function renderFormPreview($form_id)
        {
        }
        /**
         * Set the posts to one
         *
         * @param WP_Query $query
         *
         * @return void
         */
        public function pre_get_posts($query)
        {
        }
    }
    class Deactivator
    {
        /**
         * This method will be called on plugin deactivation
         * @return void
         */
        public function handleDeactivation()
        {
        }
        public static function disableCronSchedule()
        {
        }
    }
}

namespace FluentForm\App\Modules\Acl {
    class RoleManager
    {
        public function getRoles()
        {
        }
        public function setRoles()
        {
        }
        public function verifyPermissionSet()
        {
        }
        public function currentUserFormFormCapability()
        {
        }
    }
    class Acl
    {
        static $capability = '';
        static $role = '';
        public static function getPermissionSet()
        {
        }
        /**
         * Fluentform access controll permissions assignment.
         */
        public static function setPermissions()
        {
        }
        /**
         * Verify if current user has a fluentform permission.
         *
         * @param $permission
         * @param null $formId
         * @param string $message
         * @param bool $json
         *
         * @throws \Exception
         */
        public static function verify($permission, $formId = null, $message = 'You do not have permission to perform this action.', $json = true)
        {
        }
        public static function hasPermission($permissions, $formId = false)
        {
        }
        public static function hasAnyFormPermission($form_id = false)
        {
        }
        public static function getCurrentUserCapability()
        {
        }
        public static function findUserCapability($user)
        {
        }
        public static function getCurrentUserRole()
        {
        }
        public static function verifyNonce($key = 'fluent_forms_admin_nonce')
        {
        }
        public static function getReadablePermissions()
        {
        }
        public static function getUserPermissions($user = false)
        {
        }
        public static function isSuperMan($user = false)
        {
        }
        public static function getCurrentUserPermissions()
        {
        }
        public static function attachPermissions($user, $permissions)
        {
        }
    }
    class Managers
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function __construct()
        {
        }
        public function get()
        {
        }
        public function store()
        {
        }
        public function remove()
        {
        }
        public function dependencyValidate($permissions)
        {
        }
    }
}

namespace FluentForm\App\Modules\Widgets {
    class OxygenEl extends \OxyEl
    {
        public function init()
        {
        }
        public function class_names()
        {
        }
        public function button_place()
        {
        }
        public function button_priority()
        {
        }
        public function isBuilderEditorActive()
        {
        }
    }
    class OxyFluentFormWidget extends \FluentForm\App\Modules\Widgets\OxygenEl
    {
        public $css_added = false;
        public function name()
        {
        }
        public function slug()
        {
        }
        public function accordion_button_place()
        {
        }
        public function icon()
        {
        }
        public function controls()
        {
        }
        public function formContainerStyleControls()
        {
        }
        public function formInputLabelsStyle()
        {
        }
        public function formInputsStyle()
        {
        }
        public function checkboxGridStyle()
        {
        }
        public function gdprAndTermsConditionStyle()
        {
        }
        public function sectionBreakStyle()
        {
        }
        public function render($options, $defaults, $content)
        {
        }
        public function init()
        {
        }
        public function enablePresets()
        {
        }
        public function enableFullPresets()
        {
        }
        public function customCSS($options, $selector)
        {
        }
        public function checkboxAndRadioStyle()
        {
        }
        public function fileUploadStyle()
        {
        }
        public function progressBarStyle()
        {
        }
        public function submitBtnStyle()
        {
        }
        public function stepButtonStyle()
        {
        }
        public function successMessageStyle()
        {
        }
        public function errorMessageStyle()
        {
        }
    }
    class OxygenWidget
    {
        public function __construct()
        {
        }
        public function initOxygenEl()
        {
        }
        public function initWidgets()
        {
        }
        public function addAccordionSection()
        {
        }
        public function registerAddPlusSubsections()
        {
        }
    }
    class SidebarWidgets extends \WP_Widget
    {
        function __construct()
        {
        }
        public function widget($args, $instance)
        {
        }
        public function form($instance)
        {
        }
        public function update($new_instance, $old_instance)
        {
        }
    }
    // Exit if accessed directly
    class FluentFormWidget extends \Elementor\Widget_Base
    {
        public function get_name()
        {
        }
        public function get_title()
        {
        }
        public function get_icon()
        {
        }
        public function get_keywords()
        {
        }
        public function get_categories()
        {
        }
        public function get_style_depends()
        {
        }
        public function get_script_depends()
        {
        }
        protected function register_controls()
        {
        }
        protected function register_general_controls()
        {
        }
        protected function register_error_controls()
        {
        }
        protected function register_title_description_style_controls()
        {
        }
        protected function register_form_container_style_controls()
        {
        }
        protected function register_label_style_controls()
        {
        }
        protected function register_input_textarea_style_controls()
        {
        }
        protected function register_terms_gdpr_style_controls()
        {
        }
        protected function register_placeholder_style_controls()
        {
        }
        protected function register_radio_checkbox_style_controls()
        {
        }
        protected function register_section_break_style_controls()
        {
        }
        protected function register_checkbox_grid_style_controls()
        {
        }
        protected function register_address_line_style_controls()
        {
        }
        protected function register_image_upload_style_controls()
        {
        }
        protected function register_pagination_style_controls()
        {
        }
        protected function register_submit_button_style_controls()
        {
        }
        protected function register_success_message_style_controls()
        {
        }
        protected function register_errors_style_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render the widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    class ElementorWidget
    {
        public function __construct($app)
        {
        }
        public function init_widgets()
        {
        }
        public function enqueueAssets()
        {
        }
    }
}

namespace FluentForm\App\Modules {
    class DashboardWidgetModule
    {
        public function showStat()
        {
        }
    }
}

namespace FluentForm\App\Helpers {
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
         * @return string $text
         */
        public static function encrypt($text)
        {
        }
        /**
         * Decrypt a text using a predefined salt.
         * 
         * @param string $text
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
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function startsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string ends with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function endsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string contains a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function contains($haystack, $needles)
        {
        }
        /**
         * Determine if a given string does not contain a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function doNotContains($haystack, $needles)
        {
        }
    }
    class Helper
    {
        public static $tabIndex = 0;
        public static $formInstance = 0;
        public static $loadedForms = [];
        public static $tabIndexStatus = 'na';
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
        public static function getFormMeta($formId, $metaKey, $default = '')
        {
        }
        public static function setFormMeta($formId, $metaKey, $value)
        {
        }
        public static function getSubmissionMeta($submissionId, $metaKey, $default = false)
        {
        }
        public static function setSubmissionMeta($submissionId, $metaKey, $value, $formId = false)
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
        public static function isTabIndexEnabled()
        {
        }
        public static function isMultiStepForm($formId)
        {
        }
        public static function hasFormElement($formId, $elementName)
        {
        }
        public static function isUniqueValidation($validation, $field, $formData, $fields, $form)
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
        public static function getForm($id)
        {
        }
        public static function shouldHidePassword($formId)
        {
        }
    }
}

namespace Box\Spout\Reader\Common {
    /**
     * Class ReaderOptions
     * Readers' common options
     *
     * @package Box\Spout\Reader\Common
     */
    class ReaderOptions
    {
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates = false;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows = false;
        /**
         * @return bool Whether date/time values should be returned as PHP objects or be formatted as strings.
         */
        public function shouldFormatDates()
        {
        }
        /**
         * Sets whether date/time values should be returned as PHP objects or be formatted as strings.
         *
         * @param bool $shouldFormatDates
         * @return ReaderOptions
         */
        public function setShouldFormatDates($shouldFormatDates)
        {
        }
        /**
         * @return bool Whether empty rows should be returned or skipped.
         */
        public function shouldPreserveEmptyRows()
        {
        }
        /**
         * Sets whether empty rows should be returned or skipped.
         *
         * @param bool $shouldPreserveEmptyRows
         * @return ReaderOptions
         */
        public function setShouldPreserveEmptyRows($shouldPreserveEmptyRows)
        {
        }
    }
}

namespace Box\Spout\Reader\ODS {
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\ODS
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        // No extra options
    }
}

namespace Box\Spout\Reader {
    /**
     * Interface IteratorInterface
     *
     * @package Box\Spout\Reader
     */
    interface IteratorInterface extends \Iterator
    {
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end();
    }
}

namespace Box\Spout\Reader\ODS {
    /**
     * Class RowIterator
     *
     * @package Box\Spout\Reader\ODS
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_TABLE = 'table:table';
        const XML_NODE_ROW = 'table:table-row';
        const XML_NODE_CELL = 'table:table-cell';
        const MAX_COLUMNS_EXCEL = 16384;
        /** Definition of XML attribute used to parse data */
        const XML_ATTRIBUTE_NUM_ROWS_REPEATED = 'table:number-rows-repeated';
        const XML_ATTRIBUTE_NUM_COLUMNS_REPEATED = 'table:number-columns-repeated';
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Reader\Common\XMLProcessor Helper Object to process XML nodes */
        protected $xmlProcessor;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var Helper\CellValueFormatter Helper to format cell values */
        protected $cellValueFormatter;
        /** @var bool Whether the iterator has already been rewound once */
        protected $hasAlreadyBeenRewound = false;
        /** @var array Contains the data for the currently processed row (key = cell index, value = cell value) */
        protected $currentlyProcessedRowData = [];
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var int Last row index processed (one-based) */
        protected $lastRowIndexProcessed = 0;
        /** @var int Row index to be processed next (one-based) */
        protected $nextRowIndexToBeProcessed = 1;
        /** @var mixed|null Value of the last processed cell (because when reading cell at column N+1, cell N is processed) */
        protected $lastProcessedCellValue = null;
        /** @var int Number of times the last processed row should be repeated */
        protected $numRowsRepeated = 1;
        /** @var int Number of times the last cell value should be copied to the cells on its right */
        protected $numColumnsRepeated = 1;
        /** @var bool Whether at least one cell has been read for the row currently being processed */
        protected $hasAlreadyReadOneCellInCurrentRow = false;
        /**
         * @param XMLReader $xmlReader XML Reader, positioned on the "<table:table>" element
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         */
        public function __construct($xmlReader, $options)
        {
        }
        /**
         * Rewind the Iterator to the first element.
         * NOTE: It can only be done once, as it is not possible to read an XML file backwards.
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\IteratorNotRewindableException If the iterator is rewound more than once
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Empty rows will be skipped.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        public function next()
        {
        }
        /**
         * Returns whether we need data for the next row to be processed.
         * We DO need to read data if:
         *   - we have not read any rows yet
         *      OR
         *   - the next row to be processed immediately follows the last read row
         *
         * @return bool Whether we need data for the next row to be processed.
         */
        protected function doesNeedDataForNextRowToBeProcessed()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-row>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-cell>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processCellStartingNode($xmlReader)
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowEndingNode()
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processTableEndingNode()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-row>" starting node
         * @return int The value of "table:number-rows-repeated" attribute of the current node, or 1 if attribute missing
         */
        protected function getNumRowsRepeatedForCurrentNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-cell>" starting node
         * @return int The value of "table:number-columns-repeated" attribute of the current node, or 1 if attribute missing
         */
        protected function getNumColumnsRepeatedForCurrentNode($xmlReader)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|\DateInterval|null The value associated with the cell, empty string if cell's type is void/undefined, null on error
         */
        protected function getCellValue($node)
        {
        }
        /**
         * After finishing processing each cell, a row is considered empty if it contains
         * no cells or if the value of the last read cell is an empty string.
         * After finishing processing each cell, the last read cell is not part of the
         * row data yet (as we still need to apply the "num-columns-repeated" attribute).
         *
         * @param array $rowData
         * @param string|int|float|bool|\DateTime|\DateInterval|null The value of the last read cell
         * @return bool Whether the row is empty
         */
        protected function isEmptyRow($rowData, $lastReadCellValue)
        {
        }
        /**
         * Return the current element, from the buffer.
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}

namespace Box\Spout\Reader {
    /**
     * Interface SheetInterface
     *
     * @package Box\Spout\Reader
     */
    interface SheetInterface
    {
        /**
         * Returns an iterator to iterate over the sheet's rows.
         *
         * @return \Iterator
         */
        public function getRowIterator();
    }
}

namespace Box\Spout\Reader\ODS {
    /**
     * Class Sheet
     * Represents a sheet within a ODS file
     *
     * @package Box\Spout\Reader\ODS
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\ODS\RowIterator To iterate over sheet's rows */
        protected $rowIterator;
        /** @var int ID of the sheet */
        protected $id;
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string Name of the sheet */
        protected $name;
        /** @var bool Whether the sheet was the active one */
        protected $isActive;
        /**
         * @param XMLReader $xmlReader XML Reader, positioned on the "<table:table>" element
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $sheetName Name of the sheet
         * @param bool $isSheetActive Whether the sheet was defined as active
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         */
        public function __construct($xmlReader, $sheetIndex, $sheetName, $isSheetActive, $options)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\ODS\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Whether the sheet was defined as active
         */
        public function isActive()
        {
        }
    }
}

namespace Box\Spout\Reader {
    /**
     * Interface ReaderInterface
     *
     * @package Box\Spout\Reader
     */
    interface ReaderInterface
    {
        /**
         * Prepares the reader to read the given file. It also makes sure
         * that the file exists and is readable.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException
         */
        public function open($filePath);
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return \Iterator To iterate over sheets
         * @throws \Box\Spout\Reader\Exception\ReaderNotOpenedException If called before opening the reader
         */
        public function getSheetIterator();
        /**
         * Closes the reader, preventing any additional reading
         *
         * @return void
         */
        public function close();
    }
    /**
     * Class AbstractReader
     *
     * @package Box\Spout\Reader
     * @abstract
     */
    abstract class AbstractReader implements \Box\Spout\Reader\ReaderInterface
    {
        /** @var bool Indicates whether the stream is currently open */
        protected $isStreamOpened = false;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Reader\Common\ReaderOptions Reader's customized options */
        protected $options;
        /**
         * Returns the reader's current options
         *
         * @return \Box\Spout\Reader\Common\ReaderOptions
         */
        protected abstract function getOptions();
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected abstract function doesSupportStreamWrapper();
        /**
         * Opens the file at the given file path to make it ready to be read
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         */
        protected abstract function openReader($filePath);
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return \Iterator To iterate over sheets
         */
        protected abstract function getConcreteSheetIterator();
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return AbstractReader
         */
        protected abstract function closeReader();
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @return AbstractReader
         */
        public function setGlobalFunctionsHelper($globalFunctionsHelper)
        {
        }
        /**
         * Sets whether date/time values should be returned as PHP objects or be formatted as strings.
         *
         * @api
         * @param bool $shouldFormatDates
         * @return AbstractReader
         */
        public function setShouldFormatDates($shouldFormatDates)
        {
        }
        /**
         * Sets whether empty rows should be returned or skipped.
         *
         * @api
         * @param bool $shouldPreserveEmptyRows
         * @return AbstractReader
         */
        public function setShouldPreserveEmptyRows($shouldPreserveEmptyRows)
        {
        }
        /**
         * Prepares the reader to read the given file. It also makes sure
         * that the file exists and is readable.
         *
         * @api
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path does not exist, is not readable or is corrupted
         */
        public function open($filePath)
        {
        }
        /**
         * Returns the real path of the given path.
         * If the given path is a valid stream wrapper, returns the path unchanged.
         *
         * @param string $filePath
         * @return string
         */
        protected function getFileRealPath($filePath)
        {
        }
        /**
         * Returns the scheme of the custom stream wrapper, if the path indicates a stream wrapper is used.
         * For example, php://temp => php, s3://path/to/file => s3...
         *
         * @param string $filePath Path of the file to be read
         * @return string|null The stream wrapper scheme or NULL if not a stream wrapper
         */
        protected function getStreamWrapperScheme($filePath)
        {
        }
        /**
         * Checks if the given path is an unsupported stream wrapper
         * (like local path, php://temp, mystream://foo/bar...).
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path is an unsupported stream wrapper
         */
        protected function isStreamWrapper($filePath)
        {
        }
        /**
         * Checks if the given path is an supported stream wrapper
         * (like php://temp, mystream://foo/bar...).
         * If the given path is a local path, returns true.
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path is an supported stream wrapper
         */
        protected function isSupportedStreamWrapper($filePath)
        {
        }
        /**
         * Checks if a path is a PHP stream (like php://output, php://memory, ...)
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path maps to a PHP stream
         */
        protected function isPhpStream($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @api
         * @return \Iterator To iterate over sheets
         * @throws \Box\Spout\Reader\Exception\ReaderNotOpenedException If called before opening the reader
         */
        public function getSheetIterator()
        {
        }
        /**
         * Closes the reader, preventing any additional reading
         *
         * @api
         * @return void
         */
        public function close()
        {
        }
    }
}

namespace Box\Spout\Reader\ODS {
    /**
     * Class Reader
     * This class provides support to read data from a ODS file
     *
     * @package Box\Spout\Reader\ODS
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var \ZipArchive */
        protected $zip;
        /** @var SheetIterator To iterator over the ODS sheets */
        protected $sheetIterator;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given file path to make it ready to be read.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path or its content cannot be read
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
}

namespace Box\Spout\Reader\ODS\Helper {
    /**
     * Class SettingsHelper
     * This class provides helper functions to extract data from the "settings.xml" file.
     *
     * @package Box\Spout\Reader\ODS\Helper
     */
    class SettingsHelper
    {
        const SETTINGS_XML_FILE_PATH = 'settings.xml';
        /** Definition of XML nodes name and attribute used to parse settings data */
        const XML_NODE_CONFIG_ITEM = 'config:config-item';
        const XML_ATTRIBUTE_CONFIG_NAME = 'config:name';
        const XML_ATTRIBUTE_VALUE_ACTIVE_TABLE = 'ActiveTable';
        /**
         * @param string $filePath Path of the file to be read
         * @return string|null Name of the sheet that was defined as active or NULL if none found
         */
        public function getActiveSheetName($filePath)
        {
        }
    }
    /**
     * Class CellValueFormatter
     * This class provides helper functions to format cell values
     *
     * @package Box\Spout\Reader\ODS\Helper
     */
    class CellValueFormatter
    {
        /** Definition of all possible cell types */
        const CELL_TYPE_STRING = 'string';
        const CELL_TYPE_FLOAT = 'float';
        const CELL_TYPE_BOOLEAN = 'boolean';
        const CELL_TYPE_DATE = 'date';
        const CELL_TYPE_TIME = 'time';
        const CELL_TYPE_CURRENCY = 'currency';
        const CELL_TYPE_PERCENTAGE = 'percentage';
        const CELL_TYPE_VOID = 'void';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_P = 'p';
        const XML_NODE_S = 'text:s';
        const XML_NODE_A = 'text:a';
        const XML_NODE_SPAN = 'text:span';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_TYPE = 'office:value-type';
        const XML_ATTRIBUTE_VALUE = 'office:value';
        const XML_ATTRIBUTE_BOOLEAN_VALUE = 'office:boolean-value';
        const XML_ATTRIBUTE_DATE_VALUE = 'office:date-value';
        const XML_ATTRIBUTE_TIME_VALUE = 'office:time-value';
        const XML_ATTRIBUTE_CURRENCY = 'office:currency';
        const XML_ATTRIBUTE_C = 'text:c';
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates;
        /** @var \Box\Spout\Common\Escaper\ODS Used to unescape XML data */
        protected $escaper;
        /**
         * @param bool $shouldFormatDates Whether date/time values should be returned as PHP objects or be formatted as strings
         */
        public function __construct($shouldFormatDates)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         * @see http://docs.oasis-open.org/office/v1.2/os/OpenDocument-v1.2-os-part1.html#refTable13
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|\DateInterval|null The value associated with the cell, empty string if cell's type is void/undefined, null on error
         */
        public function extractAndFormatNodeValue($node)
        {
        }
        /**
         * Returns the cell String value.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell
         */
        protected function formatStringCellValue($node)
        {
        }
        /**
         * Returns the cell Numeric value from the given node.
         *
         * @param \DOMNode $node
         * @return int|float The value associated with the cell
         */
        protected function formatFloatCellValue($node)
        {
        }
        /**
         * Returns the cell Boolean value from the given node.
         *
         * @param \DOMNode $node
         * @return bool The value associated with the cell
         */
        protected function formatBooleanCellValue($node)
        {
        }
        /**
         * Returns the cell Date value from the given node.
         *
         * @param \DOMNode $node
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatDateCellValue($node)
        {
        }
        /**
         * Returns the cell Time value from the given node.
         *
         * @param \DOMNode $node
         * @return \DateInterval|string|null The value associated with the cell or NULL if invalid time value
         */
        protected function formatTimeCellValue($node)
        {
        }
        /**
         * Returns the cell Currency value from the given node.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell (e.g. "100 USD" or "9.99 EUR")
         */
        protected function formatCurrencyCellValue($node)
        {
        }
        /**
         * Returns the cell Percentage value from the given node.
         *
         * @param \DOMNode $node
         * @return int|float The value associated with the cell
         */
        protected function formatPercentageCellValue($node)
        {
        }
    }
}

namespace Box\Spout\Reader\ODS {
    /**
     * Class SheetIterator
     * Iterate over ODS sheet.
     *
     * @package Box\Spout\Reader\ODS
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        const CONTENT_XML_FILE_PATH = 'content.xml';
        /** Definition of XML nodes name and attribute used to parse sheet data */
        const XML_NODE_TABLE = 'table:table';
        const XML_ATTRIBUTE_TABLE_NAME = 'table:name';
        /** @var string $filePath Path of the file to be read */
        protected $filePath;
        /** @var \Box\Spout\Reader\ODS\ReaderOptions Reader's current options */
        protected $options;
        /** @var XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Common\Escaper\ODS Used to unescape XML data */
        protected $escaper;
        /** @var bool Whether there are still at least a sheet to be read */
        protected $hasFoundSheet;
        /** @var int The index of the sheet being read (zero-based) */
        protected $currentSheetIndex;
        /** @var string The name of the sheet that was defined as active */
        protected $activeSheetName;
        /**
         * @param string $filePath Path of the file to be read
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        public function __construct($filePath, $options)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the XML file containing sheets' data
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\ODS\Sheet
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}

namespace Box\Spout\Reader\Wrapper {
    /**
     * Trait XMLInternalErrorsHelper
     *
     * @package Box\Spout\Reader\Wrapper
     */
    trait XMLInternalErrorsHelper
    {
        /** @var bool Stores whether XML errors were initially stored internally - used to reset */
        protected $initialUseInternalErrorsValue;
        /**
         * To avoid displaying lots of warning/error messages on screen,
         * stores errors internally instead.
         *
         * @return void
         */
        protected function useXMLInternalErrors()
        {
        }
        /**
         * Throws an XMLProcessingException if an error occured.
         * It also always resets the "libxml_use_internal_errors" setting back to its initial value.
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException
         */
        protected function resetXMLInternalErrorsSettingAndThrowIfXMLErrorOccured()
        {
        }
        /**
         * Returns whether the a XML error has occured since the last time errors were cleared.
         *
         * @return bool TRUE if an error occured, FALSE otherwise
         */
        private function hasXMLErrorOccured()
        {
        }
        /**
         * Returns the error message for the last XML error that occured.
         * @see libxml_get_last_error
         *
         * @return String|null Last XML error message or null if no error
         */
        private function getLastXMLErrorMessage()
        {
        }
        /**
         * @return void
         */
        protected function resetXMLInternalErrorsSetting()
        {
        }
    }
    /**
     * Class XMLReader
     * Wrapper around the built-in XMLReader
     * @see \XMLReader
     *
     * @package Box\Spout\Reader\Wrapper
     */
    class XMLReader extends \XMLReader
    {
        use \Box\Spout\Reader\Wrapper\XMLInternalErrorsHelper;
        const ZIP_WRAPPER = 'zip://';
        /**
         * Opens the XML Reader to read a file located inside a ZIP file.
         *
         * @param string $zipFilePath Path to the ZIP file
         * @param string $fileInsideZipPath Relative or absolute path of the file inside the zip
         * @return bool TRUE on success or FALSE on failure
         */
        public function openFileInZip($zipFilePath, $fileInsideZipPath)
        {
        }
        /**
         * Returns the real path for the given path components.
         * This is useful to avoid issues on some Windows setup.
         *
         * @param string $zipFilePath Path to the ZIP file
         * @param string $fileInsideZipPath Relative or absolute path of the file inside the zip
         * @return string The real path URI
         */
        public function getRealPathURIForFileInZip($zipFilePath, $fileInsideZipPath)
        {
        }
        /**
         * Returns whether the file at the given location exists
         *
         * @param string $zipStreamURI URI of a zip stream, e.g. "zip://file.zip#path/inside.xml"
         * @return bool TRUE if the file exists, FALSE otherwise
         */
        protected function fileExistsWithinZip($zipStreamURI)
        {
        }
        /**
         * Move to next node in document
         * @see \XMLReader::read
         *
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function read()
        {
        }
        /**
         * Read until the element with the given name is found, or the end of the file.
         *
         * @param string $nodeName Name of the node to find
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function readUntilNodeFound($nodeName)
        {
        }
        /**
         * Move cursor to next node skipping all subtrees
         * @see \XMLReader::next
         *
         * @param string|void $localName The name of the next node to move to
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function next($localName = null)
        {
        }
        /**
         * @param string $nodeName
         * @return bool Whether the XML Reader is currently positioned on the starting node with given name
         */
        public function isPositionedOnStartingNode($nodeName)
        {
        }
        /**
         * @param string $nodeName
         * @return bool Whether the XML Reader is currently positioned on the ending node with given name
         */
        public function isPositionedOnEndingNode($nodeName)
        {
        }
        /**
         * @return string The name of the current node, un-prefixed
         */
        public function getCurrentNodeName()
        {
        }
    }
}

namespace Box\Spout\Reader\XLSX {
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\XLSX
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        /** @var string|null Temporary folder where the temporary files will be created */
        protected $tempFolder = null;
        /**
         * @return string|null Temporary folder where the temporary files will be created
         */
        public function getTempFolder()
        {
        }
        /**
         * @param string|null $tempFolder Temporary folder where the temporary files will be created
         * @return ReaderOptions
         */
        public function setTempFolder($tempFolder)
        {
        }
    }
    /**
     * Class RowIterator
     *
     * @package Box\Spout\Reader\XLSX
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_DIMENSION = 'dimension';
        const XML_NODE_WORKSHEET = 'worksheet';
        const XML_NODE_ROW = 'row';
        const XML_NODE_CELL = 'c';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_REF = 'ref';
        const XML_ATTRIBUTE_SPANS = 'spans';
        const XML_ATTRIBUTE_ROW_INDEX = 'r';
        const XML_ATTRIBUTE_CELL_INDEX = 'r';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml */
        protected $sheetDataXMLFilePath;
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Reader\Common\XMLProcessor Helper Object to process XML nodes */
        protected $xmlProcessor;
        /** @var Helper\CellValueFormatter Helper to format cell values */
        protected $cellValueFormatter;
        /** @var Helper\StyleHelper $styleHelper Helper to work with styles */
        protected $styleHelper;
        /**
         * TODO: This variable can be deleted when row indices get preserved
         * @var int Number of read rows
         */
        protected $numReadRows = 0;
        /** @var array Contains the data for the currently processed row (key = cell index, value = cell value) */
        protected $currentlyProcessedRowData = [];
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var int The number of columns the sheet has (0 meaning undefined) */
        protected $numColumns = 0;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var int Last row index processed (one-based) */
        protected $lastRowIndexProcessed = 0;
        /** @var int Row index to be processed next (one-based) */
        protected $nextRowIndexToBeProcessed = 0;
        /** @var int Last column index processed (zero-based) */
        protected $lastColumnIndexProcessed = -1;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param Helper\SharedStringsHelper $sharedStringsHelper Helper to work with shared strings
         */
        public function __construct($filePath, $sheetDataXMLFilePath, $options, $sharedStringsHelper)
        {
        }
        /**
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @return string Path of the XML file containing the sheet data,
         *                without the leading slash.
         */
        protected function normalizeSheetDataXMLFilePath($sheetDataXMLFilePath)
        {
        }
        /**
         * Rewind the Iterator to the first element.
         * Initializes the XMLReader object that reads the associated sheet data.
         * The XMLReader is configured to be safe from billion laughs attack.
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data XML cannot be read
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Reads data describing the next unprocessed row.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        public function next()
        {
        }
        /**
         * Returns whether we need data for the next row to be processed.
         * We don't need to read data if:
         *   we have already read at least one row
         *     AND
         *   we need to preserve empty rows
         *     AND
         *   the last row that was read is not the row that need to be processed
         *   (i.e. if we need to return empty rows)
         *
         * @return bool Whether we need data for the next row to be processed.
         */
        protected function doesNeedDataForNextRowToBeProcessed()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<dimension>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processDimensionStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<row>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<cell>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processCellStartingNode($xmlReader)
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowEndingNode()
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processWorksheetEndingNode()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<row>" node
         * @return int Row index
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        protected function getRowIndex($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<c>" node
         * @return int Column index
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        protected function getColumnIndex($xmlReader)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|null The value associated with the cell (null when the cell has an error)
         */
        protected function getCellValue($node)
        {
        }
        /**
         * @param array $rowData
         * @return bool Whether the given row is empty
         */
        protected function isEmptyRow($rowData)
        {
        }
        /**
         * Return the current element, either an empty row or from the buffer.
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element. Here, the row index.
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
    /**
     * Class Sheet
     * Represents a sheet within a XLSX file
     *
     * @package Box\Spout\Reader\XLSX
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\XLSX\RowIterator To iterate over sheet's rows */
        protected $rowIterator;
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string Name of the sheet */
        protected $name;
        /** @var bool Whether the sheet was the active one */
        protected $isActive;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $sheetName Name of the sheet
         * @param bool $isSheetActive Whether the sheet was defined as active
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param Helper\SharedStringsHelper Helper to work with shared strings
         */
        public function __construct($filePath, $sheetDataXMLFilePath, $sheetIndex, $sheetName, $isSheetActive, $options, $sharedStringsHelper)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\XLSX\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Whether the sheet was defined as active
         */
        public function isActive()
        {
        }
    }
    /**
     * Class Reader
     * This class provides support to read data from a XLSX file
     *
     * @package Box\Spout\Reader\XLSX
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var \ZipArchive */
        protected $zip;
        /** @var \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var SheetIterator To iterator over the XLSX sheets */
        protected $sheetIterator;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * @param string $tempFolder Temporary folder where the temporary files will be created
         * @return Reader
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given file path to make it ready to be read.
         * It also parses the sharedStrings.xml file to get all the shared strings available in memory
         * and fetches all the available sheets.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path or its content cannot be read
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
}

namespace Box\Spout\Reader\XLSX\Helper {
    /**
     * Class DateFormatHelper
     * This class provides helper functions to format Excel dates
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class DateFormatHelper
    {
        const KEY_GENERAL = 'general';
        const KEY_HOUR_12 = '12h';
        const KEY_HOUR_24 = '24h';
        /**
         * Converts the given Excel date format to a format understandable by the PHP date function.
         *
         * @param string $excelDateFormat Excel date format
         * @return string PHP date format (as defined here: http://php.net/manual/en/function.date.php)
         */
        public static function toPHPDateFormat($excelDateFormat)
        {
        }
    }
    /**
     * Class SharedStringsHelper
     * This class provides helper functions for reading sharedStrings XML file
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class SharedStringsHelper
    {
        /** Path of sharedStrings XML file inside the XLSX file */
        const SHARED_STRINGS_XML_FILE_PATH = 'xl/sharedStrings.xml';
        /** Main namespace for the sharedStrings.xml file */
        const MAIN_NAMESPACE_FOR_SHARED_STRINGS_XML = 'http://schemas.openxmlformats.org/spreadsheetml/2006/main';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_SST = 'sst';
        const XML_NODE_SI = 'si';
        const XML_NODE_R = 'r';
        const XML_NODE_T = 't';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_COUNT = 'count';
        const XML_ATTRIBUTE_UNIQUE_COUNT = 'uniqueCount';
        const XML_ATTRIBUTE_XML_SPACE = 'xml:space';
        const XML_ATTRIBUTE_VALUE_PRESERVE = 'preserve';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var string Temporary folder where the temporary files to store shared strings will be stored */
        protected $tempFolder;
        /** @var CachingStrategyInterface The best caching strategy for storing shared strings */
        protected $cachingStrategy;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string|null|void $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         */
        public function __construct($filePath, $tempFolder = null)
        {
        }
        /**
         * Returns whether the XLSX file contains a shared strings XML file
         *
         * @return bool
         */
        public function hasSharedStrings()
        {
        }
        /**
         * Builds an in-memory array containing all the shared strings of the sheet.
         * All the strings are stored in a XML file, located at 'xl/sharedStrings.xml'.
         * It is then accessed by the sheet data, via the string index in the built table.
         *
         * More documentation available here: http://msdn.microsoft.com/en-us/library/office/gg278314.aspx
         *
         * The XML file can be really big with sheets containing a lot of data. That is why
         * we need to use a XML reader that provides streaming like the XMLReader library.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If sharedStrings.xml can't be read
         */
        public function extractSharedStrings()
        {
        }
        /**
         * Returns the shared strings unique count, as specified in <sst> tag.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader instance
         * @return int|null Number of unique shared strings in the sharedStrings.xml file
         * @throws \Box\Spout\Common\Exception\IOException If sharedStrings.xml is invalid and can't be read
         */
        protected function getSharedStringsUniqueCount($xmlReader)
        {
        }
        /**
         * Returns the best shared strings caching strategy.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @return CachingStrategyInterface
         */
        protected function getBestSharedStringsCachingStrategy($sharedStringsUniqueCount)
        {
        }
        /**
         * Processes the shared strings item XML node which the given XML reader is positioned on.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on a "<si>" node
         * @param int $sharedStringIndex Index of the processed shared strings item
         * @return void
         */
        protected function processSharedStringsItem($xmlReader, $sharedStringIndex)
        {
        }
        /**
         * Not all text nodes' values must be extracted.
         * Some text nodes are part of a node describing the pronunciation for instance.
         * We'll only consider the nodes whose parents are "<si>" or "<r>".
         *
         * @param \DOMElement $textNode Text node to check
         * @return bool Whether the given text node's value must be extracted
         */
        protected function shouldExtractTextNodeValue($textNode)
        {
        }
        /**
         * If the text node has the attribute 'xml:space="preserve"', then preserve whitespace.
         *
         * @param \DOMElement $textNode The text node element (<t>) whose whitespace may be preserved
         * @return bool Whether whitespace should be preserved
         */
        protected function shouldPreserveWhitespace($textNode)
        {
        }
        /**
         * Returns the shared string at the given index, using the previously chosen caching strategy.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function cleanup()
        {
        }
    }
    /**
     * Class SheetHelper
     * This class provides helper functions related to XLSX sheets
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class SheetHelper
    {
        /** Paths of XML files relative to the XLSX file root */
        const WORKBOOK_XML_RELS_FILE_PATH = 'xl/_rels/workbook.xml.rels';
        const WORKBOOK_XML_FILE_PATH = 'xl/workbook.xml';
        /** Definition of XML node names used to parse data */
        const XML_NODE_WORKBOOK_VIEW = 'workbookView';
        const XML_NODE_SHEET = 'sheet';
        const XML_NODE_SHEETS = 'sheets';
        const XML_NODE_RELATIONSHIP = 'Relationship';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_ACTIVE_TAB = 'activeTab';
        const XML_ATTRIBUTE_R_ID = 'r:id';
        const XML_ATTRIBUTE_NAME = 'name';
        const XML_ATTRIBUTE_ID = 'Id';
        const XML_ATTRIBUTE_TARGET = 'Target';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var \Box\Spout\Reader\XLSX\ReaderOptions Reader's current options */
        protected $options;
        /** @var \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePath, $options, $sharedStringsHelper, $globalFunctionsHelper)
        {
        }
        /**
         * Returns the sheets metadata of the file located at the previously given file path.
         * The paths to the sheets' data are read from the [Content_Types].xml file.
         *
         * @return Sheet[] Sheets within the XLSX file
         */
        public function getSheets()
        {
        }
        /**
         * Returns an instance of a sheet, given the XML node describing the sheet - from "workbook.xml".
         * We can find the XML file path describing the sheet inside "workbook.xml.res", by mapping with the sheet ID
         * ("r:id" in "workbook.xml", "Id" in "workbook.xml.res").
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReaderOnSheetNode XML Reader instance, pointing on the node describing the sheet, as defined in "workbook.xml"
         * @param int $sheetIndexZeroBased Index of the sheet, based on order of appearance in the workbook (zero-based)
         * @param bool $isSheetActive Whether this sheet was defined as active
         * @return \Box\Spout\Reader\XLSX\Sheet Sheet instance
         */
        protected function getSheetFromSheetXMLNode($xmlReaderOnSheetNode, $sheetIndexZeroBased, $isSheetActive)
        {
        }
        /**
         * @param string $sheetId The sheet ID, as defined in "workbook.xml"
         * @return string The XML file path describing the sheet inside "workbook.xml.res", for the given sheet ID
         */
        protected function getSheetDataXMLFilePathForSheetId($sheetId)
        {
        }
    }
    /**
     * Class CellValueFormatter
     * This class provides helper functions to format cell values
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class CellValueFormatter
    {
        /** Definition of all possible cell types */
        const CELL_TYPE_INLINE_STRING = 'inlineStr';
        const CELL_TYPE_STR = 'str';
        const CELL_TYPE_SHARED_STRING = 's';
        const CELL_TYPE_BOOLEAN = 'b';
        const CELL_TYPE_NUMERIC = 'n';
        const CELL_TYPE_DATE = 'd';
        const CELL_TYPE_ERROR = 'e';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_VALUE = 'v';
        const XML_NODE_INLINE_STRING_VALUE = 't';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_TYPE = 't';
        const XML_ATTRIBUTE_STYLE_ID = 's';
        /** Constants used for date formatting */
        const NUM_SECONDS_IN_ONE_DAY = 86400;
        const NUM_SECONDS_IN_ONE_HOUR = 3600;
        const NUM_SECONDS_IN_ONE_MINUTE = 60;
        /**
         * February 29th, 1900 is NOT a leap year but Excel thinks it is...
         * @see https://en.wikipedia.org/wiki/Year_1900_problem#Microsoft_Excel
         */
        const ERRONEOUS_EXCEL_LEAP_YEAR_DAY = 60;
        /** @var SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var StyleHelper Helper to work with styles */
        protected $styleHelper;
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates;
        /** @var \Box\Spout\Common\Escaper\XLSX Used to unescape XML data */
        protected $escaper;
        /**
         * @param SharedStringsHelper $sharedStringsHelper Helper to work with shared strings
         * @param StyleHelper $styleHelper Helper to work with styles
         * @param bool $shouldFormatDates Whether date/time values should be returned as PHP objects or be formatted as strings
         */
        public function __construct($sharedStringsHelper, $styleHelper, $shouldFormatDates)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|null The value associated with the cell (null when the cell has an error)
         */
        public function extractAndFormatNodeValue($node)
        {
        }
        /**
         * Returns the cell's string value from a node's nested value node
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell
         */
        protected function getVNodeValue($node)
        {
        }
        /**
         * Returns the cell String value where string is inline.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatInlineStringCellValue($node)
        {
        }
        /**
         * Returns the cell String value from shared-strings file using nodeValue index.
         *
         * @param string $nodeValue
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatSharedStringCellValue($nodeValue)
        {
        }
        /**
         * Returns the cell String value, where string is stored in value node.
         *
         * @param string $nodeValue
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatStrCellValue($nodeValue)
        {
        }
        /**
         * Returns the cell Numeric value from string of nodeValue.
         * The value can also represent a timestamp and a DateTime will be returned.
         *
         * @param string $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return int|float|\DateTime|null The value associated with the cell
         */
        protected function formatNumericCellValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given timestamp.
         * NOTE: The timestamp is a float representing the number of days since January 1st, 1900.
         * NOTE: The timestamp can also represent a time, if it is a value between 0 and 1.
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatExcelTimestampValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP DateTime value, associated to the given timestamp.
         * Only the time value matters. The date part is set to Jan 1st, 1900 (base Excel date).
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|string The value associated with the cell
         */
        protected function formatExcelTimestampValueAsTimeValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given timestamp.
         * NOTE: The timestamp is a float representing the number of days since January 1st, 1900.
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatExcelTimestampValueAsDateValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns the cell Boolean value from a specific node's Value.
         *
         * @param string $nodeValue
         * @return bool The value associated with the cell
         */
        protected function formatBooleanCellValue($nodeValue)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given stored nodeValue.
         * @see ECMA-376 Part 1 - §18.17.4
         *
         * @param string $nodeValue ISO 8601 Date string
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatDateCellValue($nodeValue)
        {
        }
    }
    /**
     * Class StyleHelper
     * This class provides helper functions related to XLSX styles
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class StyleHelper
    {
        /** Paths of XML files relative to the XLSX file root */
        const STYLES_XML_FILE_PATH = 'xl/styles.xml';
        /** Nodes used to find relevant information in the styles XML file */
        const XML_NODE_NUM_FMTS = 'numFmts';
        const XML_NODE_NUM_FMT = 'numFmt';
        const XML_NODE_CELL_XFS = 'cellXfs';
        const XML_NODE_XF = 'xf';
        /** Attributes used to find relevant information in the styles XML file */
        const XML_ATTRIBUTE_NUM_FMT_ID = 'numFmtId';
        const XML_ATTRIBUTE_FORMAT_CODE = 'formatCode';
        const XML_ATTRIBUTE_APPLY_NUMBER_FORMAT = 'applyNumberFormat';
        /** By convention, default style ID is 0 */
        const DEFAULT_STYLE_ID = 0;
        const NUMBER_FORMAT_GENERAL = 'General';
        /**
         * @see https://msdn.microsoft.com/en-us/library/ff529597(v=office.12).aspx
         * @var array Mapping between built-in numFmtId and the associated format - for dates only
         */
        protected static $builtinNumFmtIdToNumFormatMapping = [
            14 => 'm/d/yyyy',
            // @NOTE: ECMA spec is 'mm-dd-yy'
            15 => 'd-mmm-yy',
            16 => 'd-mmm',
            17 => 'mmm-yy',
            18 => 'h:mm AM/PM',
            19 => 'h:mm:ss AM/PM',
            20 => 'h:mm',
            21 => 'h:mm:ss',
            22 => 'm/d/yyyy h:mm',
            // @NOTE: ECMA spec is 'm/d/yy h:mm',
            45 => 'mm:ss',
            46 => '[h]:mm:ss',
            47 => 'mm:ss.0',
        ];
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var array Array containing the IDs of built-in number formats indicating a date */
        protected $builtinNumFmtIdIndicatingDates;
        /** @var array Array containing a mapping NUM_FMT_ID => FORMAT_CODE */
        protected $customNumberFormats;
        /** @var array Array containing a mapping STYLE_ID => [STYLE_ATTRIBUTES] */
        protected $stylesAttributes;
        /** @var array Cache containing a mapping NUM_FMT_ID => IS_DATE_FORMAT. Used to avoid lots of recalculations */
        protected $numFmtIdToIsDateFormatCache = [];
        /**
         * @param string $filePath Path of the XLSX file being read
         */
        public function __construct($filePath)
        {
        }
        /**
         * Returns whether the style with the given ID should consider
         * numeric values as timestamps and format the cell as a date.
         *
         * @param int $styleId Zero-based style ID
         * @return bool Whether the cell with the given cell should display a date instead of a numeric value
         */
        public function shouldFormatNumericValueAsDate($styleId)
        {
        }
        /**
         * Reads the styles.xml file and extract the relevant information from the file.
         *
         * @return void
         */
        protected function extractRelevantInfo()
        {
        }
        /**
         * Extracts number formats from the "numFmt" nodes.
         * For simplicity, the styles attributes are kept in memory. This is possible thanks
         * to the reuse of formats. So 1 million cells should not use 1 million formats.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on the "numFmts" node
         * @return void
         */
        protected function extractNumberFormats($xmlReader)
        {
        }
        /**
         * Extracts style attributes from the "xf" nodes, inside the "cellXfs" section.
         * For simplicity, the styles attributes are kept in memory. This is possible thanks
         * to the reuse of styles. So 1 million cells should not use 1 million styles.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on the "cellXfs" node
         * @return void
         */
        protected function extractStyleAttributes($xmlReader)
        {
        }
        /**
         * @return array The custom number formats
         */
        protected function getCustomNumberFormats()
        {
        }
        /**
         * @return array The styles attributes
         */
        protected function getStylesAttributes()
        {
        }
        /**
         * @param array $styleAttributes Array containing the style attributes (2 keys: "applyNumberFormat" and "numFmtId")
         * @return bool Whether the style with the given attributes indicates that the number is a date
         */
        protected function doesStyleIndicateDate($styleAttributes)
        {
        }
        /**
         * Returns whether the number format ID indicates that the number is a date.
         * The result is cached to avoid recomputing the same thing over and over, as
         * "numFmtId" attributes can be shared between multiple styles.
         *
         * @param int $numFmtId
         * @return bool Whether the number format ID indicates that the number is a date
         */
        protected function doesNumFmtIdIndicateDate($numFmtId)
        {
        }
        /**
         * @param int $numFmtId
         * @return string|null The custom number format or NULL if none defined for the given numFmtId
         */
        protected function getFormatCodeForNumFmtId($numFmtId)
        {
        }
        /**
         * @param int $numFmtId
         * @return bool Whether the number format ID indicates that the number is a date
         */
        protected function isNumFmtIdBuiltInDateFormat($numFmtId)
        {
        }
        /**
         * @param string|null $formatCode
         * @return bool Whether the given format code indicates that the number is a date
         */
        protected function isFormatCodeCustomDateFormat($formatCode)
        {
        }
        /**
         * @param string $formatCode
         * @return bool Whether the given format code matches a date format pattern
         */
        protected function isFormatCodeMatchingDateFormatPattern($formatCode)
        {
        }
        /**
         * Returns the format as defined in "styles.xml" of the given style.
         * NOTE: It is assumed that the style DOES have a number format associated to it.
         *
         * @param int $styleId Zero-based style ID
         * @return string The number format code associated with the given style
         */
        public function getNumberFormatCode($styleId)
        {
        }
    }
    /**
     * Class CellHelper
     * This class provides helper functions when working with cells
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class CellHelper
    {
        /**
         * Fills the missing indexes of an array with a given value.
         * For instance, $dataArray = []; $a[1] = 1; $a[3] = 3;
         * Calling fillMissingArrayIndexes($dataArray, 'FILL') will return this array: ['FILL', 1, 'FILL', 3]
         *
         * @param array $dataArray The array to fill
         * @param string|void $fillValue optional
         * @return array
         */
        public static function fillMissingArrayIndexes($dataArray, $fillValue = '')
        {
        }
        /**
         * Returns the base 10 column index associated to the cell index (base 26).
         * Excel uses A to Z letters for column indexing, where A is the 1st column,
         * Z is the 26th and AA is the 27th.
         * The mapping is zero based, so that A1 maps to 0, B2 maps to 1, Z13 to 25 and AA4 to 26.
         *
         * @param string $cellIndex The Excel cell index ('A1', 'BC13', ...)
         * @return int
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        public static function getColumnIndexFromCellIndex($cellIndex)
        {
        }
        /**
         * Returns whether a cell index is valid, in an Excel world.
         * To be valid, the cell index should start with capital letters and be followed by numbers.
         * There can only be 3 letters, as there can only be 16,384 rows, which is equivalent to 'XFE'.
         *
         * @param string $cellIndex The Excel cell index ('A1', 'BC13', ...)
         * @return bool
         */
        protected static function isValidCellIndex($cellIndex)
        {
        }
    }
}

namespace Box\Spout\Reader\XLSX\Helper\SharedStringsCaching {
    /**
     * Interface CachingStrategyInterface
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    interface CachingStrategyInterface
    {
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex);
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache();
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex);
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache();
    }
    /**
     * Class FileBasedStrategy
     *
     * This class implements the file-based caching strategy for shared strings.
     * Shared strings are stored in small files (with a max number of strings per file).
     * This strategy is slower than an in-memory strategy but is used to avoid out of memory crashes.
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class FileBasedStrategy implements \Box\Spout\Reader\XLSX\Helper\SharedStringsCaching\CachingStrategyInterface
    {
        /** Value to use to escape the line feed character ("\n") */
        const ESCAPED_LINE_FEED_CHARACTER = '_x000A_';
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Common\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var string Temporary folder where the temporary files will be created */
        protected $tempFolder;
        /**
         * @var int Maximum number of strings that can be stored in one temp file
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $maxNumStringsPerTempFile;
        /** @var resource Pointer to the last temp file a shared string was written to */
        protected $tempFilePointer;
        /**
         * @var string Path of the temporary file whose contents is currently stored in memory
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $inMemoryTempFilePath;
        /**
         * @var array Contents of the temporary file that was last read
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $inMemoryTempFileContents;
        /**
         * @param string|null $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         * @param int $maxNumStringsPerTempFile Maximum number of strings that can be stored in one temp file
         */
        public function __construct($tempFolder, $maxNumStringsPerTempFile)
        {
        }
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex)
        {
        }
        /**
         * Returns the path for the temp file that should contain the string for the given index
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The temp file path for the given index
         */
        protected function getSharedStringTempFilePath($sharedStringIndex)
        {
        }
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache()
        {
        }
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache()
        {
        }
    }
    /**
     * Class InMemoryStrategy
     *
     * This class implements the in-memory caching strategy for shared strings.
     * This strategy is used when the number of unique strings is low, compared to the memory available.
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class InMemoryStrategy implements \Box\Spout\Reader\XLSX\Helper\SharedStringsCaching\CachingStrategyInterface
    {
        /** @var \SplFixedArray Array used to cache the shared strings */
        protected $inMemoryCache;
        /** @var bool Whether the cache has been closed */
        protected $isCacheClosed;
        /**
         * @param int $sharedStringsUniqueCount Number of unique shared strings
         */
        public function __construct($sharedStringsUniqueCount)
        {
        }
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex)
        {
        }
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache()
        {
        }
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache()
        {
        }
    }
    /**
     * Class CachingStrategyFactory
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class CachingStrategyFactory
    {
        /**
         * The memory amount needed to store a string was obtained empirically from this data:
         *
         *        ------------------------------------
         *        | Number of chars⁺ | Memory needed |
         *        ------------------------------------
         *        |           3,000  |         1 MB  |
         *        |          15,000  |         2 MB  |
         *        |          30,000  |         5 MB  |
         *        |          75,000  |        11 MB  |
         *        |         150,000  |        21 MB  |
         *        |         300,000  |        43 MB  |
         *        |         750,000  |       105 MB  |
         *        |       1,500,000  |       210 MB  |
         *        |       2,250,000  |       315 MB  |
         *        |       3,000,000  |       420 MB  |
         *        |       4,500,000  |       630 MB  |
         *        ------------------------------------
         *
         *        ⁺ All characters were 1 byte long
         *
         * This gives a linear graph where each 1-byte character requires about 150 bytes to be stored.
         * Given that some characters can take up to 4 bytes, we need 600 bytes per character to be safe.
         * Also, there is on average about 20 characters per cell (this is entirely empirical data...).
         *
         * This means that in order to store one shared string in memory, the memory amount needed is:
         *   => 20 * 600 ≈ 12KB
         */
        const AMOUNT_MEMORY_NEEDED_PER_STRING_IN_KB = 12;
        /**
         * To avoid running out of memory when extracting a huge number of shared strings, they can be saved to temporary files
         * instead of in memory. Then, when accessing a string, the corresponding file contents will be loaded in memory
         * and the string will be quickly retrieved.
         * The performance bottleneck is not when creating these temporary files, but rather when loading their content.
         * Because the contents of the last loaded file stays in memory until another file needs to be loaded, it works
         * best when the indexes of the shared strings are sorted in the sheet data.
         * 10,000 was chosen because it creates small files that are fast to be loaded in memory.
         */
        const MAX_NUM_STRINGS_PER_TEMP_FILE = 10000;
        /** @var CachingStrategyFactory|null Singleton instance */
        protected static $instance = null;
        /**
         * Returns the singleton instance of the factory
         *
         * @return CachingStrategyFactory
         */
        public static function getInstance()
        {
        }
        /**
         * Returns the best caching strategy, given the number of unique shared strings
         * and the amount of memory available.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @param string|void $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         * @return CachingStrategyInterface The best caching strategy
         */
        public function getBestCachingStrategy($sharedStringsUniqueCount, $tempFolder = null)
        {
        }
        /**
         * Returns whether it is safe to use in-memory caching, given the number of unique shared strings
         * and the amount of memory available.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @return bool
         */
        protected function isInMemoryStrategyUsageSafe($sharedStringsUniqueCount)
        {
        }
        /**
         * Returns the PHP "memory_limit" in Kilobytes
         *
         * @return float
         */
        protected function getMemoryLimitInKB()
        {
        }
        /**
         * Returns the formatted "memory_limit" value
         *
         * @return string
         */
        protected function getMemoryLimitFromIni()
        {
        }
    }
}

namespace Box\Spout\Reader\XLSX {
    /**
     * Class SheetIterator
     * Iterate over XLSX sheet.
     *
     * @package Box\Spout\Reader\XLSX
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** @var \Box\Spout\Reader\XLSX\Sheet[] The list of sheet present in the file */
        protected $sheets;
        /** @var int The index of the sheet being read (zero-based) */
        protected $currentSheetIndex;
        /**
         * @param string $filePath Path of the file to be read
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper $sharedStringsHelper
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        public function __construct($filePath, $options, $sharedStringsHelper, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\XLSX\Sheet
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}

namespace Box\Spout\Reader\Common {
    /**
     * Class XMLProcessor
     * Helps process XML files
     *
     * @package Box\Spout\Reader\Common
     */
    class XMLProcessor
    {
        /* Node types */
        const NODE_TYPE_START = \Box\Spout\Reader\Wrapper\XMLReader::ELEMENT;
        const NODE_TYPE_END = \Box\Spout\Reader\Wrapper\XMLReader::END_ELEMENT;
        /* Keys associated to reflection attributes to invoke a callback */
        const CALLBACK_REFLECTION_METHOD = 'reflectionMethod';
        const CALLBACK_REFLECTION_OBJECT = 'reflectionObject';
        /* Values returned by the callbacks to indicate what the processor should do next */
        const PROCESSING_CONTINUE = 1;
        const PROCESSING_STOP = 2;
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object
         */
        public function __construct($xmlReader)
        {
        }
        /**
         * @param string $nodeName A callback may be triggered when a node with this name is read
         * @param int $nodeType Type of the node [NODE_TYPE_START || NODE_TYPE_END]
         * @param callable $callback Callback to execute when the read node has the given name and type
         * @return XMLProcessor
         */
        public function registerCallback($nodeName, $nodeType, $callback)
        {
        }
        /**
         * Resumes the reading of the XML file where it was left off.
         * Stops whenever a callback indicates that reading should stop or at the end of the file.
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException
         */
        public function readUntilStopped()
        {
        }
    }
}

namespace Box\Spout\Reader\CSV {
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\CSV
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter = ',';
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure = '"';
        /** @var string Encoding of the CSV file to be read */
        protected $encoding = \Box\Spout\Common\Helper\EncodingHelper::ENCODING_UTF8;
        /** @var string Defines the End of line */
        protected $endOfLineCharacter = "\n";
        /**
         * @return string
         */
        public function getFieldDelimiter()
        {
        }
        /**
         * Sets the field delimiter for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldDelimiter Character that delimits fields
         * @return ReaderOptions
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * @return string
         */
        public function getFieldEnclosure()
        {
        }
        /**
         * Sets the field enclosure for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldEnclosure Character that enclose fields
         * @return ReaderOptions
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * @return string
         */
        public function getEncoding()
        {
        }
        /**
         * Sets the encoding of the CSV file to be read.
         * Needs to be called before opening the reader.
         *
         * @param string $encoding Encoding of the CSV file to be read
         * @return ReaderOptions
         */
        public function setEncoding($encoding)
        {
        }
        /**
         * @return string EOL for the CSV
         */
        public function getEndOfLineCharacter()
        {
        }
        /**
         * Sets the EOL for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $endOfLineCharacter used to properly get lines from the CSV file.
         * @return ReaderOptions
         */
        public function setEndOfLineCharacter($endOfLineCharacter)
        {
        }
    }
    /**
     * Class RowIterator
     * Iterate over CSV rows.
     *
     * @package Box\Spout\Reader\CSV
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /**
         * Value passed to fgetcsv. 0 means "unlimited" (slightly slower but accomodates for very long lines).
         */
        const MAX_READ_BYTES_PER_LINE = 0;
        /** @var resource Pointer to the CSV file to read */
        protected $filePointer;
        /** @var int Number of read rows */
        protected $numReadRows = 0;
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter;
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure;
        /** @var string Encoding of the CSV file to be read */
        protected $encoding;
        /** @var string End of line delimiter, given by the user as input. */
        protected $inputEOLDelimiter;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Common\Helper\EncodingHelper Helper to work with different encodings */
        protected $encodingHelper;
        /** @var string End of line delimiter, encoded using the same encoding as the CSV */
        protected $encodedEOLDelimiter;
        /**
         * @param resource $filePointer Pointer to the CSV file to read
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * This rewinds and skips the BOM if inserted at the beginning of the file
         * by moving the file pointer after it, so that it is not read.
         *
         * @return void
         */
        protected function rewindAndSkipBom()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Reads data for the next unprocessed row.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        public function next()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param array|bool $currentRowData
         * @return bool Whether the data for the current row can be returned or if we need to keep reading
         */
        protected function shouldReadNextRow($currentRowData)
        {
        }
        /**
         * Returns the next row, converted if necessary to UTF-8.
         * As fgetcsv() does not manage correctly encoding for non UTF-8 data,
         * we remove manually whitespace with ltrim or rtrim (depending on the order of the bytes)
         *
         * @return array|false The row for the current file pointer, encoded in UTF-8 or FALSE if nothing to read
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        protected function getNextUTF8EncodedRow()
        {
        }
        /**
         * Returns the end of line delimiter, encoded using the same encoding as the CSV.
         * The return value is cached.
         *
         * @return string
         */
        protected function getEncodedEOLDelimiter()
        {
        }
        /**
         * @param array|bool $lineData Array containing the cells value for the line
         * @return bool Whether the given line is empty
         */
        protected function isEmptyLine($lineData)
        {
        }
        /**
         * Return the current element from the buffer
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
    /**
     * Class Sheet
     *
     * @package Box\Spout\Reader\CSV
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\CSV\RowIterator To iterate over the CSV's rows */
        protected $rowIterator;
        /**
         * @param resource $filePointer Pointer to the CSV file to read
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\CSV\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet - empty string since CSV does not support that
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Always TRUE as there is only one sheet
         */
        public function isActive()
        {
        }
    }
    /**
     * Class Reader
     * This class provides support to read data from a CSV file.
     *
     * @package Box\Spout\Reader\CSV
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var resource Pointer to the file to be written */
        protected $filePointer;
        /** @var SheetIterator To iterator over the CSV unique "sheet" */
        protected $sheetIterator;
        /** @var string Original value for the "auto_detect_line_endings" INI value */
        protected $originalAutoDetectLineEndings;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * Sets the field delimiter for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldDelimiter Character that delimits fields
         * @return Reader
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * Sets the field enclosure for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldEnclosure Character that enclose fields
         * @return Reader
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * Sets the encoding of the CSV file to be read.
         * Needs to be called before opening the reader.
         *
         * @param string $encoding Encoding of the CSV file to be read
         * @return Reader
         */
        public function setEncoding($encoding)
        {
        }
        /**
         * Sets the EOL for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $endOfLineCharacter used to properly get lines from the CSV file.
         * @return Reader
         */
        public function setEndOfLineCharacter($endOfLineCharacter)
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given path to make it ready to be read.
         * If setEncoding() was not called, it assumes that the file is encoded in UTF-8.
         *
         * @param  string $filePath Path of the CSV file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
    /**
     * Class SheetIterator
     * Iterate over CSV unique "sheet".
     *
     * @package Box\Spout\Reader\CSV
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** @var \Box\Spout\Reader\CSV\Sheet The CSV unique "sheet" */
        protected $sheet;
        /** @var bool Whether the unique "sheet" has already been read */
        protected $hasReadUniqueSheet = false;
        /**
         * @param resource $filePointer
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\CSV\Sheet
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}

namespace Box\Spout\Reader {
    /**
     * Class ReaderFactory
     * This factory is used to create readers, based on the type of the file to be read.
     * It supports CSV and XLSX formats.
     *
     * @package Box\Spout\Reader
     */
    class ReaderFactory
    {
        /**
         * This creates an instance of the appropriate reader, given the type of the file to be read
         *
         * @api
         * @param  string $readerType Type of the reader to instantiate
         * @return ReaderInterface
         * @throws \Box\Spout\Common\Exception\UnsupportedTypeException
         */
        public static function create($readerType)
        {
        }
    }
}

namespace Box\Spout\Common\Exception {
    /**
     * Class SpoutException
     *
     * @package Box\Spout\Common\Exception
     * @abstract
     */
    abstract class SpoutException extends \Exception
    {
    }
}

namespace Box\Spout\Reader\Exception {
    /**
     * Class ReaderException
     *
     * @package Box\Spout\Reader\Exception
     * @abstract
     */
    abstract class ReaderException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class ReaderNotOpenedException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class ReaderNotOpenedException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class SharedStringNotFoundException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class SharedStringNotFoundException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class NoSheetsFoundException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class NoSheetsFoundException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class XMLProcessingException
     *
     * @package Box\Spout\Reader\Exception
     */
    class XMLProcessingException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class IteratorNotRewindableException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class IteratorNotRewindableException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
}

namespace Box\Spout\Common\Escaper {
    /**
     * Interface EscaperInterface
     *
     * @package Box\Spout\Common\Escaper
     */
    interface EscaperInterface
    {
        /**
         * Escapes the given string to make it compatible with PHP
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string);
        /**
         * Unescapes the given string to make it compatible with PHP
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string);
    }
}

namespace Box\Spout\Common {
    /**
     * Class Singleton
     * Defines a class as a singleton.
     *
     * @package Box\Spout\Common
     */
    trait Singleton
    {
        protected static $instance;
        /**
         * @return static
         */
        public static final function getInstance()
        {
        }
        /**
         * Singleton constructor.
         */
        private final function __construct()
        {
        }
        /**
         * Initializes the singleton
         * @return void
         */
        protected function init()
        {
        }
        private final function __wakeup()
        {
        }
        private final function __clone()
        {
        }
    }
}

namespace Box\Spout\Common\Escaper {
    /**
     * Class ODS
     * Provides functions to escape and unescape data for ODS files
     *
     * @package Box\Spout\Common\Escaper
     */
    class ODS implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        use \Box\Spout\Common\Singleton;
        /**
         * Escapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
    }
    /**
     * Class CSV
     * Provides functions to escape and unescape data for CSV files
     *
     * @package Box\Spout\Common\Escaper
     */
    class CSV implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        /**
         * Escapes the given string to make it compatible with CSV
         *
         * @codeCoverageIgnore
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with CSV
         *
         * @codeCoverageIgnore
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
    }
    /**
     * Class XLSX
     * Provides functions to escape and unescape data for XLSX files
     *
     * @package Box\Spout\Common\Escaper
     */
    class XLSX implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        use \Box\Spout\Common\Singleton;
        /** @var string Regex pattern to detect control characters that need to be escaped */
        protected $escapableControlCharactersPattern;
        /** @var string[] Map containing control characters to be escaped (key) and their escaped value (value) */
        protected $controlCharactersEscapingMap;
        /** @var string[] Map containing control characters to be escaped (value) and their escaped value (key) */
        protected $controlCharactersEscapingReverseMap;
        /**
         * Initializes the singleton instance
         */
        protected function init()
        {
        }
        /**
         * Escapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
        /**
         * @return string Regex pattern containing all escapable control characters
         */
        protected function getEscapableControlCharactersPattern()
        {
        }
        /**
         * Builds the map containing control characters to be escaped
         * mapped to their escaped values.
         * "\t", "\r" and "\n" don't need to be escaped.
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @return string[]
         */
        protected function getControlCharactersEscapingMap()
        {
        }
        /**
         * Converts PHP control characters from the given string to OpenXML escaped control characters
         *
         * Excel escapes control characters with _xHHHH_ and also escapes any
         * literal strings of that type by encoding the leading underscore.
         * So "\0" -> _x0000_ and "_x0000_" -> _x005F_x0000_.
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @param string $string String to escape
         * @return string
         */
        protected function escapeControlCharacters($string)
        {
        }
        /**
         * Escapes the escape character: "_x0000_" -> "_x005F_x0000_"
         *
         * @param string $string String to escape
         * @return string The escaped string
         */
        protected function escapeEscapeCharacter($string)
        {
        }
        /**
         * Converts OpenXML escaped control characters from the given string to PHP control characters
         *
         * Excel escapes control characters with _xHHHH_ and also escapes any
         * literal strings of that type by encoding the leading underscore.
         * So "_x0000_" -> "\0" and "_x005F_x0000_" -> "_x0000_"
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @param string $string String to unescape
         * @return string
         */
        protected function unescapeControlCharacters($string)
        {
        }
        /**
         * Unecapes the escape character: "_x005F_x0000_" => "_x0000_"
         *
         * @param string $string String to unescape
         * @return string The unescaped string
         */
        protected function unescapeEscapeCharacter($string)
        {
        }
    }
}

namespace Box\Spout\Common {
    /**
     * Class Type
     * This class references the supported types
     *
     * @api
     */
    abstract class Type
    {
        const CSV = 'csv';
        const XLSX = 'xlsx';
        const ODS = 'ods';
    }
}

namespace Box\Spout\Common\Helper {
    /**
     * Class EncodingHelper
     * This class provides helper functions to work with encodings.
     *
     * @package Box\Spout\Common\Helper
     */
    class EncodingHelper
    {
        /** Definition of the encodings that can have a BOM */
        const ENCODING_UTF8 = 'UTF-8';
        const ENCODING_UTF16_LE = 'UTF-16LE';
        const ENCODING_UTF16_BE = 'UTF-16BE';
        const ENCODING_UTF32_LE = 'UTF-32LE';
        const ENCODING_UTF32_BE = 'UTF-32BE';
        /** Definition of the BOMs for the different encodings */
        const BOM_UTF8 = "﻿";
        const BOM_UTF16_LE = "\xff\xfe";
        const BOM_UTF16_BE = "\xfe\xff";
        const BOM_UTF32_LE = "\xff\xfe\x00\x00";
        const BOM_UTF32_BE = "\x00\x00\xfe\xff";
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var array Map representing the encodings supporting BOMs (key) and their associated BOM (value) */
        protected $supportedEncodingsWithBom;
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($globalFunctionsHelper)
        {
        }
        /**
         * Returns the number of bytes to use as offset in order to skip the BOM.
         *
         * @param resource $filePointer Pointer to the file to check
         * @param string $encoding Encoding of the file to check
         * @return int Bytes offset to apply to skip the BOM (0 means no BOM)
         */
        public function getBytesOffsetToSkipBOM($filePointer, $encoding)
        {
        }
        /**
         * Returns whether the file identified by the given pointer has a BOM.
         *
         * @param resource $filePointer Pointer to the file to check
         * @param string $encoding Encoding of the file to check
         * @return bool TRUE if the file has a BOM, FALSE otherwise
         */
        protected function hasBOM($filePointer, $encoding)
        {
        }
        /**
         * Attempts to convert a non UTF-8 string into UTF-8.
         *
         * @param string $string Non UTF-8 string to be converted
         * @param string $sourceEncoding The encoding used to encode the source string
         * @return string The converted, UTF-8 string
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        public function attemptConversionToUTF8($string, $sourceEncoding)
        {
        }
        /**
         * Attempts to convert a UTF-8 string into the given encoding.
         *
         * @param string $string UTF-8 string to be converted
         * @param string $targetEncoding The encoding the string should be re-encoded into
         * @return string The converted string, encoded with the given encoding
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        public function attemptConversionFromUTF8($string, $targetEncoding)
        {
        }
        /**
         * Attempts to convert the given string to the given encoding.
         * Depending on what is installed on the server, we will try to iconv or mbstring.
         *
         * @param string $string string to be converted
         * @param string $sourceEncoding The encoding used to encode the source string
         * @param string $targetEncoding The encoding the string should be re-encoded into
         * @return string The converted string, encoded with the given encoding
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        protected function attemptConversion($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Returns whether "iconv" can be used.
         *
         * @return bool TRUE if "iconv" is available and can be used, FALSE otherwise
         */
        protected function canUseIconv()
        {
        }
        /**
         * Returns whether "mb_string" functions can be used.
         * These functions come with the PHP Intl package.
         *
         * @return bool TRUE if "mb_string" functions are available and can be used, FALSE otherwise
         */
        protected function canUseMbString()
        {
        }
    }
    /**
     * Class GlobalFunctionsHelper
     * This class wraps global functions to facilitate testing
     *
     * @codeCoverageIgnore
     *
     * @package Box\Spout\Common\Helper
     */
    class GlobalFunctionsHelper
    {
        /**
         * Wrapper around global function fopen()
         * @see fopen()
         *
         * @param string $fileName
         * @param string $mode
         * @return resource|bool
         */
        public function fopen($fileName, $mode)
        {
        }
        /**
         * Wrapper around global function fgets()
         * @see fgets()
         *
         * @param resource $handle
         * @param int|void $length
         * @return string
         */
        public function fgets($handle, $length = null)
        {
        }
        /**
         * Wrapper around global function fputs()
         * @see fputs()
         *
         * @param resource $handle
         * @param string $string
         * @return int
         */
        public function fputs($handle, $string)
        {
        }
        /**
         * Wrapper around global function fflush()
         * @see fflush()
         *
         * @param resource $handle
         * @return bool
         */
        public function fflush($handle)
        {
        }
        /**
         * Wrapper around global function fseek()
         * @see fseek()
         *
         * @param resource $handle
         * @param int $offset
         * @return int
         */
        public function fseek($handle, $offset)
        {
        }
        /**
         * Wrapper around global function fgetcsv()
         * @see fgetcsv()
         *
         * @param resource $handle
         * @param int|void $length
         * @param string|void $delimiter
         * @param string|void $enclosure
         * @return array
         */
        public function fgetcsv($handle, $length = null, $delimiter = null, $enclosure = null)
        {
        }
        /**
         * Wrapper around global function fputcsv()
         * @see fputcsv()
         *
         * @param resource $handle
         * @param array $fields
         * @param string|void $delimiter
         * @param string|void $enclosure
         * @return int
         */
        public function fputcsv($handle, array $fields, $delimiter = null, $enclosure = null)
        {
        }
        /**
         * Wrapper around global function fwrite()
         * @see fwrite()
         *
         * @param resource $handle
         * @param string $string
         * @return int
         */
        public function fwrite($handle, $string)
        {
        }
        /**
         * Wrapper around global function fclose()
         * @see fclose()
         *
         * @param resource $handle
         * @return bool
         */
        public function fclose($handle)
        {
        }
        /**
         * Wrapper around global function rewind()
         * @see rewind()
         *
         * @param resource $handle
         * @return bool
         */
        public function rewind($handle)
        {
        }
        /**
         * Wrapper around global function file_exists()
         * @see file_exists()
         *
         * @param string $fileName
         * @return bool
         */
        public function file_exists($fileName)
        {
        }
        /**
         * Wrapper around global function file_get_contents()
         * @see file_get_contents()
         *
         * @param string $filePath
         * @return string
         */
        public function file_get_contents($filePath)
        {
        }
        /**
         * Updates the given file path to use a real path.
         * This is to avoid issues on some Windows setup.
         *
         * @param string $filePath File path
         * @return string The file path using a real path
         */
        protected function convertToUseRealPath($filePath)
        {
        }
        /**
         * Returns whether the given path is a zip stream.
         *
         * @param string $path Path pointing to a document
         * @return bool TRUE if path is a zip stream, FALSE otherwise
         */
        protected function isZipStream($path)
        {
        }
        /**
         * Wrapper around global function feof()
         * @see feof()
         *
         * @param resource
         * @return bool
         */
        public function feof($handle)
        {
        }
        /**
         * Wrapper around global function is_readable()
         * @see is_readable()
         *
         * @param string $fileName
         * @return bool
         */
        public function is_readable($fileName)
        {
        }
        /**
         * Wrapper around global function basename()
         * @see basename()
         *
         * @param string $path
         * @param string|void $suffix
         * @return string
         */
        public function basename($path, $suffix = null)
        {
        }
        /**
         * Wrapper around global function header()
         * @see header()
         *
         * @param string $string
         * @return void
         */
        public function header($string)
        {
        }
        /**
         * Wrapper around global function ob_end_clean()
         * @see ob_end_clean()
         *
         * @return void
         */
        public function ob_end_clean()
        {
        }
        /**
         * Wrapper around global function iconv()
         * @see iconv()
         *
         * @param string $string The string to be converted
         * @param string $sourceEncoding The encoding of the source string
         * @param string $targetEncoding The encoding the source string should be converted to
         * @return string|bool the converted string or FALSE on failure.
         */
        public function iconv($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Wrapper around global function mb_convert_encoding()
         * @see mb_convert_encoding()
         *
         * @param string $string The string to be converted
         * @param string $sourceEncoding The encoding of the source string
         * @param string $targetEncoding The encoding the source string should be converted to
         * @return string|bool the converted string or FALSE on failure.
         */
        public function mb_convert_encoding($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Wrapper around global function stream_get_wrappers()
         * @see stream_get_wrappers()
         *
         * @return array
         */
        public function stream_get_wrappers()
        {
        }
        /**
         * Wrapper around global function function_exists()
         * @see function_exists()
         *
         * @param string $functionName
         * @return bool
         */
        public function function_exists($functionName)
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion
     *
     * @package Box\Spout\Common\Helper
     */
    class FileSystemHelper
    {
        /** @var string Real path of the base folder where all the I/O can occur */
        protected $baseFolderRealPath;
        /**
         * @param string $baseFolderPath The path of the base folder where all the I/O can occur
         */
        public function __construct($baseFolderPath)
        {
        }
        /**
         * Creates an empty folder with the given name under the given parent folder.
         *
         * @param string $parentFolderPath The parent folder path under which the folder is going to be created
         * @param string $folderName The name of the folder to create
         * @return string Path of the created folder
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or if the folder path is not inside of the base folder
         */
        public function createFolder($parentFolderPath, $folderName)
        {
        }
        /**
         * Creates a file with the given name and content in the given folder.
         * The parent folder must exist.
         *
         * @param string $parentFolderPath The parent folder path where the file is going to be created
         * @param string $fileName The name of the file to create
         * @param string $fileContents The contents of the file to create
         * @return string Path of the created file
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file or if the file path is not inside of the base folder
         */
        public function createFileWithContents($parentFolderPath, $fileName, $fileContents)
        {
        }
        /**
         * Delete the file at the given path
         *
         * @param string $filePath Path of the file to delete
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file path is not inside of the base folder
         */
        public function deleteFile($filePath)
        {
        }
        /**
         * Delete the folder at the given path as well as all its contents
         *
         * @param string $folderPath Path of the folder to delete
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the folder path is not inside of the base folder
         */
        public function deleteFolderRecursively($folderPath)
        {
        }
        /**
         * All I/O operations must occur inside the base folder, for security reasons.
         * This function will throw an exception if the folder where the I/O operation
         * should occur is not inside the base folder.
         *
         * @param string $operationFolderPath The path of the folder where the I/O operation should occur
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the folder where the I/O operation should occur is not inside the base folder
         */
        protected function throwIfOperationNotInBaseFolder($operationFolderPath)
        {
        }
    }
    /**
     * Class StringHelper
     * This class provides helper functions to work with strings and multibyte strings.
     *
     * @codeCoverageIgnore
     *
     * @package Box\Spout\Common\Helper
     */
    class StringHelper
    {
        /** @var bool Whether the mbstring extension is loaded */
        protected $hasMbstringSupport;
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Returns the length of the given string.
         * It uses the multi-bytes function is available.
         * @see strlen
         * @see mb_strlen
         *
         * @param string $string
         * @return int
         */
        public function getStringLength($string)
        {
        }
        /**
         * Returns the position of the first occurrence of the given character/substring within the given string.
         * It uses the multi-bytes function is available.
         * @see strpos
         * @see mb_strpos
         *
         * @param string $char Needle
         * @param string $string Haystack
         * @return int Char/substring's first occurrence position within the string if found (starts at 0) or -1 if not found
         */
        public function getCharFirstOccurrencePosition($char, $string)
        {
        }
        /**
         * Returns the position of the last occurrence of the given character/substring within the given string.
         * It uses the multi-bytes function is available.
         * @see strrpos
         * @see mb_strrpos
         *
         * @param string $char Needle
         * @param string $string Haystack
         * @return int Char/substring's last occurrence position within the string if found (starts at 0) or -1 if not found
         */
        public function getCharLastOccurrencePosition($char, $string)
        {
        }
    }
}

namespace Box\Spout\Common\Exception {
    /**
     * Class EncodingConversionException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class EncodingConversionException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class UnsupportedTypeException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class UnsupportedTypeException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class IOException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class IOException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class InvalidArgumentException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class InvalidArgumentException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
}

namespace Box\Spout\Writer {
    /**
     * Interface WriterInterface
     *
     * @package Box\Spout\Writer
     */
    interface WriterInterface
    {
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be written to a file.
         *
         * @param  string $outputFilePath Path of the output file that will contain the data
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened or if the given path is not writable
         */
        public function openToFile($outputFilePath);
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be outputted directly to the browser.
         *
         * @param  string $outputFileName Name of the output file that will contain the data. If a path is passed in, only the file name will be kept
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        public function openToBrowser($outputFileName);
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @return WriterInterface
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRow(array $dataRow);
        /**
         * Write given data to the output and apply the given style.
         * @see addRow
         *
         * @param array $dataRow Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the row.
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowWithStyle(array $dataRow, $style);
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRows Array of array containing data to be streamed.
         *          Example $dataRow = [
         *              ['data11', 12, , '', 'data13'],
         *              ['data21', 'data22', null],
         *          ];
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRows(array $dataRows);
        /**
         * Write given data to the output and apply the given style.
         * @see addRows
         *
         * @param array $dataRows Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the rows.
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowsWithStyle(array $dataRows, $style);
        /**
         * Closes the writer. This will close the streamer as well, preventing new data
         * to be written to the file.
         *
         * @return void
         */
        public function close();
    }
    /**
     * Class AbstractWriter
     *
     * @package Box\Spout\Writer
     * @abstract
     */
    abstract class AbstractWriter implements \Box\Spout\Writer\WriterInterface
    {
        /** @var string Path to the output file */
        protected $outputFilePath;
        /** @var resource Pointer to the file/stream we will write to */
        protected $filePointer;
        /** @var bool Indicates whether the writer has been opened or not */
        protected $isWriterOpened = false;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var Style\Style Style to be applied to the next written row(s) */
        protected $rowStyle;
        /** @var Style\Style Default row style. Each writer can have its own default style */
        protected $defaultRowStyle;
        /** @var string Content-Type value for the header - to be defined by child class */
        protected static $headerContentType;
        /**
         * Opens the streamer and makes it ready to accept data.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        protected abstract function openWriter();
        /**
         * Adds data to the currently openned writer.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param Style\Style $style Style to be applied to the written row
         * @return void
         */
        protected abstract function addRowToWriter(array $dataRow, $style);
        /**
         * Closes the streamer, preventing any additional writing.
         *
         * @return void
         */
        protected abstract function closeWriter();
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Sets the default styles for all rows added with "addRow".
         * Overriding the default style instead of using "addRowWithStyle" improves performance by 20%.
         * @see https://github.com/box/spout/issues/272
         *
         * @param Style\Style $defaultStyle
         * @return AbstractWriter
         */
        public function setDefaultRowStyle($defaultStyle)
        {
        }
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @return AbstractWriter
         */
        public function setGlobalFunctionsHelper($globalFunctionsHelper)
        {
        }
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be written to a file.
         *
         * @api
         * @param  string $outputFilePath Path of the output file that will contain the data
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened or if the given path is not writable
         */
        public function openToFile($outputFilePath)
        {
        }
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be outputted directly to the browser.
         *
         * @codeCoverageIgnore
         *
         * @api
         * @param  string $outputFileName Name of the output file that will contain the data. If a path is passed in, only the file name will be kept
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        public function openToBrowser($outputFileName)
        {
        }
        /**
         * Checks if the pointer to the file/stream to write to is available.
         * Will throw an exception if not available.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the pointer is not available
         */
        protected function throwIfFilePointerIsNotAvailable()
        {
        }
        /**
         * Checks if the writer has already been opened, since some actions must be done before it gets opened.
         * Throws an exception if already opened.
         *
         * @param string $message Error message
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened and must not be.
         */
        protected function throwIfWriterAlreadyOpened($message)
        {
        }
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *                        If empty, no data is added (i.e. not even as a blank row)
         *                        Example: $dataRow = ['data1', 1234, null, '', 'data5', false];
         * @api
         * @return AbstractWriter
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         * @throws \Box\Spout\Common\Exception\SpoutException If anything else goes wrong while writing data
         */
        public function addRow(array $dataRow)
        {
        }
        /**
         * Write given data to the output and apply the given style.
         * @see addRow
         *
         * @api
         * @param array $dataRow Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the row.
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowWithStyle(array $dataRow, $style)
        {
        }
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @api
         * @param  array $dataRows Array of array containing data to be streamed.
         *                         If a row is empty, it won't be added (i.e. not even as a blank row)
         *                         Example: $dataRows = [
         *                             ['data11', 12, , '', 'data13'],
         *                             ['data21', 'data22', null, false],
         *                         ];
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRows(array $dataRows)
        {
        }
        /**
         * Write given data to the output and apply the given style.
         * @see addRows
         *
         * @api
         * @param array $dataRows Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the rows.
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowsWithStyle(array $dataRows, $style)
        {
        }
        /**
         * Returns the default style to be applied to rows.
         * Can be overriden by children to have a custom style.
         *
         * @return Style\Style
         */
        protected function getDefaultRowStyle()
        {
        }
        /**
         * Closes the writer. This will close the streamer as well, preventing new data
         * to be written to the file.
         *
         * @api
         * @return void
         */
        public function close()
        {
        }
    }
    /**
     * Class AbstractMultiSheetsWriter
     *
     * @package Box\Spout\Writer
     * @abstract
     */
    abstract class AbstractMultiSheetsWriter extends \Box\Spout\Writer\AbstractWriter
    {
        /** @var bool Whether new sheets should be automatically created when the max rows limit per sheet is reached */
        protected $shouldCreateNewSheetsAutomatically = true;
        /**
         * @return Common\Internal\WorkbookInterface The workbook representing the file to be written
         */
        protected abstract function getWorkbook();
        /**
         * Sets whether new sheets should be automatically created when the max rows limit per sheet is reached.
         * This must be set before opening the writer.
         *
         * @api
         * @param bool $shouldCreateNewSheetsAutomatically Whether new sheets should be automatically created when the max rows limit per sheet is reached
         * @return AbstractMultiSheetsWriter
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setShouldCreateNewSheetsAutomatically($shouldCreateNewSheetsAutomatically)
        {
        }
        /**
         * Returns all the workbook's sheets
         *
         * @api
         * @return Common\Sheet[] All the workbook's sheets
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function getSheets()
        {
        }
        /**
         * Creates a new sheet and make it the current sheet. The data will now be written to this sheet.
         *
         * @api
         * @return Common\Sheet The created sheet
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function addNewSheetAndMakeItCurrent()
        {
        }
        /**
         * Returns the current sheet
         *
         * @api
         * @return Common\Sheet The current sheet
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function getCurrentSheet()
        {
        }
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @api
         * @param Common\Sheet $sheet The sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet)
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         */
        protected function throwIfBookIsNotAvailable()
        {
        }
    }
}

namespace Box\Spout\Writer\ODS {
    /**
     * Class Writer
     * This class provides base support to write data to ODS files
     *
     * @package Box\Spout\Writer\ODS
     */
    class Writer extends \Box\Spout\Writer\AbstractMultiSheetsWriter
    {
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'application/vnd.oasis.opendocument.spreadsheet';
        /** @var string Temporary folder where the files to create the ODS will be stored */
        protected $tempFolder;
        /** @var Internal\Workbook The workbook for the ODS file */
        protected $book;
        /**
         * Sets a custom temporary folder for creating intermediate files/folders.
         * This must be set before opening the writer.
         *
         * @api
         * @param string $tempFolder Temporary folder where the files to create the ODS will be stored
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Configures the write and sets the current sheet pointer to a new sheet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the file for writing
         */
        protected function openWriter()
        {
        }
        /**
         * @return Internal\Workbook The workbook representing the file to be written
         */
        protected function getWorkbook()
        {
        }
        /**
         * Adds data to the currently opened writer.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Closes the writer, preventing any additional writing.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}

namespace Box\Spout\Writer\Common\Internal {
    /**
     * Interface WorkbookInterface
     *
     * @package Box\Spout\Writer\Common\Internal
     */
    interface WorkbookInterface
    {
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet();
        /**
         * Creates a new sheet in the workbook and make it the current sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheetAndMakeItCurrent();
        /**
         * @return WorksheetInterface[] All the workbook's sheets
         */
        public function getWorksheets();
        /**
         * Returns the current sheet
         *
         * @return WorksheetInterface The current sheet
         */
        public function getCurrentWorksheet();
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet The "external" sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet);
        /**
         * Adds data to the current sheet.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If trying to create a new sheet and unable to open the sheet for writing
         * @throws \Box\Spout\Writer\Exception\WriterException If unable to write data
         */
        public function addRowToCurrentWorksheet($dataRow, $style);
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public function close($finalFilePointer);
    }
    /**
     * Class Workbook
     * Represents a workbook within a spreadsheet file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\Common
     */
    abstract class AbstractWorkbook implements \Box\Spout\Writer\Common\Internal\WorkbookInterface
    {
        /** @var bool Whether new sheets should be automatically created when the max rows limit per sheet is reached */
        protected $shouldCreateNewSheetsAutomatically;
        /** @var string Timestamp based unique ID identifying the workbook */
        protected $internalId;
        /** @var WorksheetInterface[] Array containing the workbook's sheets */
        protected $worksheets = [];
        /** @var WorksheetInterface The worksheet where data will be written to */
        protected $currentWorksheet;
        /**
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Helper\AbstractStyleHelper The specific style helper
         */
        protected abstract function getStyleHelper();
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected abstract function getMaxRowsPerWorksheet();
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public abstract function addNewSheet();
        /**
         * Creates a new sheet in the workbook and make it the current sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheetAndMakeItCurrent()
        {
        }
        /**
         * @return WorksheetInterface[] All the workbook's sheets
         */
        public function getWorksheets()
        {
        }
        /**
         * Returns the current sheet
         *
         * @return WorksheetInterface The current sheet
         */
        public function getCurrentWorksheet()
        {
        }
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet The "external" sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet)
        {
        }
        /**
         * @param WorksheetInterface $worksheet
         * @return void
         */
        protected function setCurrentWorksheet($worksheet)
        {
        }
        /**
         * Returns the worksheet associated to the given external sheet.
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet
         * @return WorksheetInterface|null The worksheet associated to the given external sheet or null if not found.
         */
        protected function getWorksheetFromExternalSheet($sheet)
        {
        }
        /**
         * Adds data to the current sheet.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If trying to create a new sheet and unable to open the sheet for writing
         * @throws \Box\Spout\Writer\Exception\WriterException If unable to write data
         */
        public function addRowToCurrentWorksheet($dataRow, $style)
        {
        }
        /**
         * @return bool Whether the current worksheet has reached the maximum number of rows per sheet.
         */
        protected function hasCurrentWorkseetReachedMaxRows()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public abstract function close($finalFilePointer);
    }
}

namespace Box\Spout\Writer\ODS\Internal {
    /**
     * Class Workbook
     * Represents a workbook within a ODS file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\ODS\Internal
     */
    class Workbook extends \Box\Spout\Writer\Common\Internal\AbstractWorkbook
    {
        /**
         * Maximum number of rows a ODS sheet can contain
         * @see https://ask.libreoffice.org/en/question/8631/upper-limit-to-number-of-rows-in-calc/
         */
        protected static $maxRowsPerWorksheet = 1048576;
        /** @var \Box\Spout\Writer\ODS\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var \Box\Spout\Writer\ODS\Helper\StyleHelper Helper to apply styles */
        protected $styleHelper;
        /**
         * @param string $tempFolder
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($tempFolder, $shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\ODS\Helper\StyleHelper Helper to apply styles to ODS files
         */
        protected function getStyleHelper()
        {
        }
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected function getMaxRowsPerWorksheet()
        {
        }
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return Worksheet The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public function close($finalFilePointer)
        {
        }
        /**
         * Deletes the root folder created in the temp folder and all its contents.
         *
         * @return void
         */
        protected function cleanupTempFolder()
        {
        }
    }
}

namespace Box\Spout\Writer\Common\Internal {
    /**
     * Interface WorksheetInterface
     *
     * @package Box\Spout\Writer\Common\Internal
     */
    interface WorksheetInterface
    {
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet();
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex();
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style);
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close();
    }
}

namespace Box\Spout\Writer\ODS\Internal {
    /**
     * Class Worksheet
     * Represents a worksheet within a ODS file. The difference with the Sheet object is
     * that this class provides an interface to write data
     *
     * @package Box\Spout\Writer\ODS\Internal
     */
    class Worksheet implements \Box\Spout\Writer\Common\Internal\WorksheetInterface
    {
        /** @var \Box\Spout\Writer\Common\Sheet The "external" sheet */
        protected $externalSheet;
        /** @var string Path to the XML file that will contain the sheet data */
        protected $worksheetFilePath;
        /** @var \Box\Spout\Common\Escaper\ODS Strings escaper */
        protected $stringsEscaper;
        /** @var \Box\Spout\Common\Helper\StringHelper To help with string manipulation */
        protected $stringHelper;
        /** @var Resource Pointer to the temporary sheet data file (e.g. worksheets-temp/sheet1.xml) */
        protected $sheetFilePointer;
        /** @var int Maximum number of columns among all the written rows */
        protected $maxNumColumns = 1;
        /** @var int Index of the last written row */
        protected $lastWrittenRowIndex = 0;
        /**
         * @param \Box\Spout\Writer\Common\Sheet $externalSheet The associated "external" sheet
         * @param string $worksheetFilesFolder Temporary folder where the files to create the ODS will be stored
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        public function __construct($externalSheet, $worksheetFilesFolder)
        {
        }
        /**
         * Prepares the worksheet to accept data
         * The XML file does not contain the "<table:table>" node as it contains the sheet's name
         * which may change during the execution of the program. It will be added at the end.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function startSheet()
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSheetFilePointerIsNotAvailable()
        {
        }
        /**
         * @return string Path to the temporary sheet content XML file
         */
        public function getWorksheetFilePath()
        {
        }
        /**
         * Returns the table XML root node as string.
         *
         * @return string <table> node as string
         */
        public function getTableElementStartAsString()
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet()
        {
        }
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex()
        {
        }
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style)
        {
        }
        /**
         * Returns the cell XML content, given its value.
         *
         * @param mixed $cellValue The value to be written
         * @param int $styleIndex Index of the used style
         * @param int $numTimesValueRepeated Number of times the value is consecutively repeated
         * @return string The cell XML content
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        protected function getCellXML($cellValue, $styleIndex, $numTimesValueRepeated)
        {
        }
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close()
        {
        }
    }
}

namespace Box\Spout\Writer\ODS\Helper {
    /**
     * Class BorderHelper
     *
     * The fo:border, fo:border-top, fo:border-bottom, fo:border-left and fo:border-right attributes
     * specify border properties
     * http://docs.oasis-open.org/office/v1.2/os/OpenDocument-v1.2-os-part1.html#__RefHeading__1419780_253892949
     *
     * Example table-cell-properties
     *
     * <style:table-cell-properties
     * fo:border-bottom="0.74pt solid #ffc000" style:diagonal-bl-tr="none"
     * style:diagonal-tl-br="none" fo:border-left="none" fo:border-right="none"
     * style:rotation-align="none" fo:border-top="none"/>
     */
    class BorderHelper
    {
        /**
         * Width mappings
         *
         * @var array
         */
        protected static $widthMap = [\Box\Spout\Writer\Style\Border::WIDTH_THIN => '0.75pt', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => '1.75pt', \Box\Spout\Writer\Style\Border::WIDTH_THICK => '2.5pt'];
        /**
         * Style mapping
         *
         * @var array
         */
        protected static $styleMap = [\Box\Spout\Writer\Style\Border::STYLE_SOLID => 'solid', \Box\Spout\Writer\Style\Border::STYLE_DASHED => 'dashed', \Box\Spout\Writer\Style\Border::STYLE_DOTTED => 'dotted', \Box\Spout\Writer\Style\Border::STYLE_DOUBLE => 'double'];
        /**
         * @param BorderPart $borderPart
         * @return string
         */
        public static function serializeBorderPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion for ODS files
     *
     * @package Box\Spout\Writer\ODS\Helper
     */
    class FileSystemHelper extends \Box\Spout\Common\Helper\FileSystemHelper
    {
        const APP_NAME = 'Spout';
        const MIMETYPE = 'application/vnd.oasis.opendocument.spreadsheet';
        const META_INF_FOLDER_NAME = 'META-INF';
        const SHEETS_CONTENT_TEMP_FOLDER_NAME = 'worksheets-temp';
        const MANIFEST_XML_FILE_NAME = 'manifest.xml';
        const CONTENT_XML_FILE_NAME = 'content.xml';
        const META_XML_FILE_NAME = 'meta.xml';
        const MIMETYPE_FILE_NAME = 'mimetype';
        const STYLES_XML_FILE_NAME = 'styles.xml';
        /** @var string Path to the root folder inside the temp folder where the files to create the ODS will be stored */
        protected $rootFolder;
        /** @var string Path to the "META-INF" folder inside the root folder */
        protected $metaInfFolder;
        /** @var string Path to the temp folder, inside the root folder, where specific sheets content will be written to */
        protected $sheetsContentTempFolder;
        /**
         * @return string
         */
        public function getRootFolder()
        {
        }
        /**
         * @return string
         */
        public function getSheetsContentTempFolder()
        {
        }
        /**
         * Creates all the folders needed to create a ODS file, as well as the files that won't change.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function createBaseFilesAndFolders()
        {
        }
        /**
         * Creates the folder that will be used as root
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createRootFolder()
        {
        }
        /**
         * Creates the "META-INF" folder under the root folder as well as the "manifest.xml" file in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or the "manifest.xml" file
         */
        protected function createMetaInfoFolderAndFile()
        {
        }
        /**
         * Creates the "manifest.xml" file under the "META-INF" folder (under root)
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createManifestFile()
        {
        }
        /**
         * Creates the temp folder where specific sheets content will be written to.
         * This folder is not part of the final ODS file and is only used to be able to jump between sheets.
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createSheetsContentTempFolder()
        {
        }
        /**
         * Creates the "meta.xml" file under the root folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createMetaFile()
        {
        }
        /**
         * Creates the "mimetype" file under the root folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createMimetypeFile()
        {
        }
        /**
         * Creates the "content.xml" file under the root folder
         *
         * @param Worksheet[] $worksheets
         * @param StyleHelper $styleHelper
         * @return FileSystemHelper
         */
        public function createContentFile($worksheets, $styleHelper)
        {
        }
        /**
         * Streams the content of the file at the given path into the target resource.
         * Depending on which mode the target resource was created with, it will truncate then copy
         * or append the content to the target file.
         *
         * @param string $sourceFilePath Path of the file whose content will be copied
         * @param resource $targetResource Target resource that will receive the content
         * @return void
         */
        protected function copyFileContentsToTarget($sourceFilePath, $targetResource)
        {
        }
        /**
         * Deletes the temporary folder where sheets content was stored.
         *
         * @return FileSystemHelper
         */
        public function deleteWorksheetTempFolder()
        {
        }
        /**
         * Creates the "styles.xml" file under the root folder
         *
         * @param StyleHelper $styleHelper
         * @param int $numWorksheets Number of created worksheets
         * @return FileSystemHelper
         */
        public function createStylesFile($styleHelper, $numWorksheets)
        {
        }
        /**
         * Zips the root folder and streams the contents of the zip into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function zipRootFolderAndCopyToStream($streamPointer)
        {
        }
    }
}

namespace Box\Spout\Writer\Common\Helper {
    /**
     * Class AbstractStyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    abstract class AbstractStyleHelper
    {
        /** @var array [SERIALIZED_STYLE] => [STYLE_ID] mapping table, keeping track of the registered styles */
        protected $serializedStyleToStyleIdMappingTable = [];
        /** @var array [STYLE_ID] => [STYLE] mapping table, keeping track of the registered styles */
        protected $styleIdToStyleMappingTable = [];
        /**
         * @param \Box\Spout\Writer\Style\Style $defaultStyle
         */
        public function __construct($defaultStyle)
        {
        }
        /**
         * Registers the given style as a used style.
         * Duplicate styles won't be registered more than once.
         *
         * @param \Box\Spout\Writer\Style\Style $style The style to be registered
         * @return \Box\Spout\Writer\Style\Style The registered style, updated with an internal ID.
         */
        public function registerStyle($style)
        {
        }
        /**
         * Returns whether the given style has already been registered.
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return bool
         */
        protected function hasStyleAlreadyBeenRegistered($style)
        {
        }
        /**
         * Returns the registered style associated to the given serialization.
         *
         * @param string $serializedStyle The serialized style from which the actual style should be fetched from
         * @return \Box\Spout\Writer\Style\Style
         */
        protected function getStyleFromSerializedStyle($serializedStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\Style\Style[] List of registered styles
         */
        protected function getRegisteredStyles()
        {
        }
        /**
         * Returns the default style
         *
         * @return \Box\Spout\Writer\Style\Style Default style
         */
        protected function getDefaultStyle()
        {
        }
        /**
         * Apply additional styles if the given row needs it.
         * Typically, set "wrap text" if a cell contains a new line.
         *
         * @param \Box\Spout\Writer\Style\Style $style The original style
         * @param array $dataRow The row the style will be applied to
         * @return \Box\Spout\Writer\Style\Style The updated style
         */
        public function applyExtraStylesIfNeeded($style, $dataRow)
        {
        }
        /**
         * Set the "wrap text" option if a cell of the given row contains a new line.
         *
         * @NOTE: There is a bug on the Mac version of Excel (2011 and below) where new lines
         *        are ignored even when the "wrap text" option is set. This only occurs with
         *        inline strings (shared strings do work fine).
         *        A workaround would be to encode "\n" as "_x000D_" but it does not work
         *        on the Windows version of Excel...
         *
         * @param \Box\Spout\Writer\Style\Style $style The original style
         * @param array $dataRow The row the style will be applied to
         * @return \Box\Spout\Writer\Style\Style The eventually updated style
         */
        protected function applyWrapTextIfCellContainsNewLine($style, $dataRow)
        {
        }
    }
}

namespace Box\Spout\Writer\ODS\Helper {
    /**
     * Class StyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\ODS\Helper
     */
    class StyleHelper extends \Box\Spout\Writer\Common\Helper\AbstractStyleHelper
    {
        /** @var string[] [FONT_NAME] => [] Map whose keys contain all the fonts used */
        protected $usedFontsSet = [];
        /**
         * Registers the given style as a used style.
         * Duplicate styles won't be registered more than once.
         *
         * @param \Box\Spout\Writer\Style\Style $style The style to be registered
         * @return \Box\Spout\Writer\Style\Style The registered style, updated with an internal ID.
         */
        public function registerStyle($style)
        {
        }
        /**
         * @return string[] List of used fonts name
         */
        protected function getUsedFonts()
        {
        }
        /**
         * Returns the content of the "styles.xml" file, given a list of styles.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        public function getStylesXMLFileContent($numWorksheets)
        {
        }
        /**
         * Returns the content of the "<office:font-face-decls>" section, inside "styles.xml" file.
         *
         * @return string
         */
        protected function getFontFaceSectionContent()
        {
        }
        /**
         * Returns the content of the "<office:styles>" section, inside "styles.xml" file.
         *
         * @return string
         */
        protected function getStylesSectionContent()
        {
        }
        /**
         * Returns the content of the "<office:automatic-styles>" section, inside "styles.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        protected function getAutomaticStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the content of the "<office:master-styles>" section, inside "styles.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        protected function getMasterStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the contents of the "<office:font-face-decls>" section, inside "content.xml" file.
         *
         * @return string
         */
        public function getContentXmlFontFaceSectionContent()
        {
        }
        /**
         * Returns the contents of the "<office:automatic-styles>" section, inside "content.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        public function getContentXmlAutomaticStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the contents of the "<style:style>" section, inside "<office:automatic-styles>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        protected function getStyleSectionContent($style)
        {
        }
    }
}

namespace Box\Spout\Writer\XLSX {
    /**
     * Class Writer
     * This class provides base support to write data to XLSX files
     *
     * @package Box\Spout\Writer\XLSX
     */
    class Writer extends \Box\Spout\Writer\AbstractMultiSheetsWriter
    {
        /** Default style font values */
        const DEFAULT_FONT_SIZE = 12;
        const DEFAULT_FONT_NAME = 'Calibri';
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        /** @var string Temporary folder where the files to create the XLSX will be stored */
        protected $tempFolder;
        /** @var bool Whether inline or shared strings should be used - inline string is more memory efficient */
        protected $shouldUseInlineStrings = true;
        /** @var Internal\Workbook The workbook for the XLSX file */
        protected $book;
        /**
         * Sets a custom temporary folder for creating intermediate files/folders.
         * This must be set before opening the writer.
         *
         * @api
         * @param string $tempFolder Temporary folder where the files to create the XLSX will be stored
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Use inline string to be more memory efficient. If set to false, it will use shared strings.
         * This must be set before opening the writer.
         *
         * @api
         * @param bool $shouldUseInlineStrings Whether inline or shared strings should be used
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setShouldUseInlineStrings($shouldUseInlineStrings)
        {
        }
        /**
         * Configures the write and sets the current sheet pointer to a new sheet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the file for writing
         */
        protected function openWriter()
        {
        }
        /**
         * @return Internal\Workbook The workbook representing the file to be written
         */
        protected function getWorkbook()
        {
        }
        /**
         * Adds data to the currently opened writer.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Returns the default style to be applied to rows.
         *
         * @return \Box\Spout\Writer\Style\Style
         */
        protected function getDefaultRowStyle()
        {
        }
        /**
         * Closes the writer, preventing any additional writing.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}

namespace Box\Spout\Writer\XLSX\Internal {
    /**
     * Class Workbook
     * Represents a workbook within a XLSX file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\XLSX\Internal
     */
    class Workbook extends \Box\Spout\Writer\Common\Internal\AbstractWorkbook
    {
        /**
         * Maximum number of rows a XLSX sheet can contain
         * @see http://office.microsoft.com/en-us/excel-help/excel-specifications-and-limits-HP010073849.aspx
         */
        protected static $maxRowsPerWorksheet = 1048576;
        /** @var bool Whether inline or shared strings should be used */
        protected $shouldUseInlineStrings;
        /** @var \Box\Spout\Writer\XLSX\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper Helper to write shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to apply styles */
        protected $styleHelper;
        /**
         * @param string $tempFolder
         * @param bool $shouldUseInlineStrings
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($tempFolder, $shouldUseInlineStrings, $shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to apply styles to XLSX files
         */
        protected function getStyleHelper()
        {
        }
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected function getMaxRowsPerWorksheet()
        {
        }
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return Worksheet The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the XLSX file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the XLSX that will be created
         * @return void
         */
        public function close($finalFilePointer)
        {
        }
        /**
         * Deletes the root folder created in the temp folder and all its contents.
         *
         * @return void
         */
        protected function cleanupTempFolder()
        {
        }
    }
    /**
     * Class Worksheet
     * Represents a worksheet within a XLSX file. The difference with the Sheet object is
     * that this class provides an interface to write data
     *
     * @package Box\Spout\Writer\XLSX\Internal
     */
    class Worksheet implements \Box\Spout\Writer\Common\Internal\WorksheetInterface
    {
        /**
         * Maximum number of characters a cell can contain
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-16c69c74-3d6a-4aaf-ba35-e6eb276e8eaa [Excel 2007]
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-1672b34d-7043-467e-8e27-269d656771c3 [Excel 2010]
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-ca36e2dc-1f09-4620-b726-67c00b05040f [Excel 2013/2016]
         */
        const MAX_CHARACTERS_PER_CELL = 32767;
        const SHEET_XML_FILE_HEADER = <<<EOD
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships">
EOD;
        /** @var \Box\Spout\Writer\Common\Sheet The "external" sheet */
        protected $externalSheet;
        /** @var string Path to the XML file that will contain the sheet data */
        protected $worksheetFilePath;
        /** @var \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper Helper to write shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to work with styles */
        protected $styleHelper;
        /** @var bool Whether inline or shared strings should be used */
        protected $shouldUseInlineStrings;
        /** @var \Box\Spout\Common\Escaper\XLSX Strings escaper */
        protected $stringsEscaper;
        /** @var \Box\Spout\Common\Helper\StringHelper String helper */
        protected $stringHelper;
        /** @var Resource Pointer to the sheet data file (e.g. xl/worksheets/sheet1.xml) */
        protected $sheetFilePointer;
        /** @var int Index of the last written row */
        protected $lastWrittenRowIndex = 0;
        /**
         * @param \Box\Spout\Writer\Common\Sheet $externalSheet The associated "external" sheet
         * @param string $worksheetFilesFolder Temporary folder where the files to create the XLSX will be stored
         * @param \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper $sharedStringsHelper Helper for shared strings
         * @param \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to work with styles
         * @param bool $shouldUseInlineStrings Whether inline or shared strings should be used
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        public function __construct($externalSheet, $worksheetFilesFolder, $sharedStringsHelper, $styleHelper, $shouldUseInlineStrings)
        {
        }
        /**
         * Prepares the worksheet to accept data
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function startSheet()
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSheetFilePointerIsNotAvailable()
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet()
        {
        }
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex()
        {
        }
        /**
         * @return int The ID of the worksheet
         */
        public function getId()
        {
        }
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style)
        {
        }
        /**
         * Returns whether the given row is empty
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @return bool Whether the given row is empty
         */
        protected function isEmptyRow($dataRow)
        {
        }
        /**
         * Adds non empty row to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        protected function addNonEmptyRow($dataRow, $style)
        {
        }
        /**
         * Build and return xml for a single cell.
         *
         * @param int $rowIndex
         * @param int $cellNumber
         * @param mixed $cellValue
         * @param int $styleId
         * @return string
         * @throws InvalidArgumentException If the given value cannot be processed
         */
        protected function getCellXML($rowIndex, $cellNumber, $cellValue, $styleId)
        {
        }
        /**
         * Returns the XML fragment for a cell containing a non empty string
         *
         * @param string $cellValue The cell value
         * @return string The XML fragment representing the cell
         * @throws InvalidArgumentException If the string exceeds the maximum number of characters allowed per cell
         */
        protected function getCellXMLFragmentForNonEmptyString($cellValue)
        {
        }
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close()
        {
        }
    }
}

namespace Box\Spout\Writer\XLSX\Helper {
    /**
     * Class SharedStringsHelper
     * This class provides helper functions to write shared strings
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class SharedStringsHelper
    {
        const SHARED_STRINGS_FILE_NAME = 'sharedStrings.xml';
        const SHARED_STRINGS_XML_FILE_FIRST_PART_HEADER = <<<EOD
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<sst xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main"
EOD;
        /**
         * This number must be really big so that the no generated file will have more strings than that.
         * If the strings number goes above, characters will be overwritten in an unwanted way and will corrupt the file.
         */
        const DEFAULT_STRINGS_COUNT_PART = 'count="9999999999999" uniqueCount="9999999999999"';
        /** @var resource Pointer to the sharedStrings.xml file */
        protected $sharedStringsFilePointer;
        /** @var int Number of shared strings already written */
        protected $numSharedStrings = 0;
        /** @var \Box\Spout\Common\Escaper\XLSX Strings escaper */
        protected $stringsEscaper;
        /**
         * @param string $xlFolder Path to the "xl" folder
         */
        public function __construct($xlFolder)
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSharedStringsFilePointerIsNotAvailable()
        {
        }
        /**
         * Writes the given string into the sharedStrings.xml file.
         * Starting and ending whitespaces are preserved.
         *
         * @param string $string
         * @return int ID of the written shared string
         */
        public function writeString($string)
        {
        }
        /**
         * Finishes writing the data in the sharedStrings.xml file and closes the file.
         *
         * @return void
         */
        public function close()
        {
        }
    }
    class BorderHelper
    {
        public static $xlsxStyleMap = [\Box\Spout\Writer\Style\Border::STYLE_SOLID => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'thin', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'medium', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'thick'], \Box\Spout\Writer\Style\Border::STYLE_DOTTED => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'dotted', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'dotted', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'dotted'], \Box\Spout\Writer\Style\Border::STYLE_DASHED => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'dashed', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'mediumDashed', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'mediumDashed'], \Box\Spout\Writer\Style\Border::STYLE_DOUBLE => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'double', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'double', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'double'], \Box\Spout\Writer\Style\Border::STYLE_NONE => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'none', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'none', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'none']];
        /**
         * @param BorderPart $borderPart
         * @return string
         */
        public static function serializeBorderPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
        /**
         * Get the style definition from the style map
         *
         * @param BorderPart $borderPart
         * @return string
         */
        protected static function getBorderStyle(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion for XLSX files
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class FileSystemHelper extends \Box\Spout\Common\Helper\FileSystemHelper
    {
        const APP_NAME = 'Spout';
        const RELS_FOLDER_NAME = '_rels';
        const DOC_PROPS_FOLDER_NAME = 'docProps';
        const XL_FOLDER_NAME = 'xl';
        const WORKSHEETS_FOLDER_NAME = 'worksheets';
        const RELS_FILE_NAME = '.rels';
        const APP_XML_FILE_NAME = 'app.xml';
        const CORE_XML_FILE_NAME = 'core.xml';
        const CONTENT_TYPES_XML_FILE_NAME = '[Content_Types].xml';
        const WORKBOOK_XML_FILE_NAME = 'workbook.xml';
        const WORKBOOK_RELS_XML_FILE_NAME = 'workbook.xml.rels';
        const STYLES_XML_FILE_NAME = 'styles.xml';
        /** @var string Path to the root folder inside the temp folder where the files to create the XLSX will be stored */
        protected $rootFolder;
        /** @var string Path to the "_rels" folder inside the root folder */
        protected $relsFolder;
        /** @var string Path to the "docProps" folder inside the root folder */
        protected $docPropsFolder;
        /** @var string Path to the "xl" folder inside the root folder */
        protected $xlFolder;
        /** @var string Path to the "_rels" folder inside the "xl" folder */
        protected $xlRelsFolder;
        /** @var string Path to the "worksheets" folder inside the "xl" folder */
        protected $xlWorksheetsFolder;
        /**
         * @return string
         */
        public function getRootFolder()
        {
        }
        /**
         * @return string
         */
        public function getXlFolder()
        {
        }
        /**
         * @return string
         */
        public function getXlWorksheetsFolder()
        {
        }
        /**
         * Creates all the folders needed to create a XLSX file, as well as the files that won't change.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function createBaseFilesAndFolders()
        {
        }
        /**
         * Creates the folder that will be used as root
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createRootFolder()
        {
        }
        /**
         * Creates the "_rels" folder under the root folder as well as the ".rels" file in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or the ".rels" file
         */
        protected function createRelsFolderAndFile()
        {
        }
        /**
         * Creates the ".rels" file under the "_rels" folder (under root)
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createRelsFile()
        {
        }
        /**
         * Creates the "docProps" folder under the root folder as well as the "app.xml" and "core.xml" files in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or one of the files
         */
        protected function createDocPropsFolderAndFiles()
        {
        }
        /**
         * Creates the "app.xml" file under the "docProps" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createAppXmlFile()
        {
        }
        /**
         * Creates the "core.xml" file under the "docProps" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createCoreXmlFile()
        {
        }
        /**
         * Creates the "xl" folder under the root folder as well as its subfolders
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the folders
         */
        protected function createXlFolderAndSubFolders()
        {
        }
        /**
         * Creates the "_rels" folder under the "xl" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createXlRelsFolder()
        {
        }
        /**
         * Creates the "worksheets" folder under the "xl" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createXlWorksheetsFolder()
        {
        }
        /**
         * Creates the "[Content_Types].xml" file under the root folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createContentTypesFile($worksheets)
        {
        }
        /**
         * Creates the "workbook.xml" file under the "xl" folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createWorkbookFile($worksheets)
        {
        }
        /**
         * Creates the "workbook.xml.res" file under the "xl/_res" folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createWorkbookRelsFile($worksheets)
        {
        }
        /**
         * Creates the "styles.xml" file under the "xl" folder
         *
         * @param StyleHelper $styleHelper
         * @return FileSystemHelper
         */
        public function createStylesFile($styleHelper)
        {
        }
        /**
         * Zips the root folder and streams the contents of the zip into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function zipRootFolderAndCopyToStream($streamPointer)
        {
        }
    }
    /**
     * Class StyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class StyleHelper extends \Box\Spout\Writer\Common\Helper\AbstractStyleHelper
    {
        /**
         * @var array
         */
        protected $registeredFills = [];
        /**
         * @var array [STYLE_ID] => [FILL_ID] maps a style to a fill declaration
         */
        protected $styleIdToFillMappingTable = [];
        /**
         * Excel preserves two default fills with index 0 and 1
         * Since Excel is the dominant vendor - we play along here
         *
         * @var int The fill index counter for custom fills.
         */
        protected $fillIndex = 2;
        /**
         * @var array
         */
        protected $registeredBorders = [];
        /**
         * @var array [STYLE_ID] => [BORDER_ID] maps a style to a border declaration
         */
        protected $styleIdToBorderMappingTable = [];
        /**
         * XLSX specific operations on the registered styles
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return \Box\Spout\Writer\Style\Style
         */
        public function registerStyle($style)
        {
        }
        /**
         * Register a fill definition
         *
         * @param \Box\Spout\Writer\Style\Style $style
         */
        protected function registerFill($style)
        {
        }
        /**
         * Register a border definition
         *
         * @param \Box\Spout\Writer\Style\Style $style
         */
        protected function registerBorder($style)
        {
        }
        /**
         * For empty cells, we can specify a style or not. If no style are specified,
         * then the software default will be applied. But sometimes, it may be useful
         * to override this default style, for instance if the cell should have a
         * background color different than the default one or some borders
         * (fonts property don't really matter here).
         *
         * @param int $styleId
         * @return bool Whether the cell should define a custom style
         */
        public function shouldApplyStyleOnEmptyCell($styleId)
        {
        }
        /**
         * Returns the content of the "styles.xml" file, given a list of styles.
         *
         * @return string
         */
        public function getStylesXMLFileContent()
        {
        }
        /**
         * Returns the content of the "<fonts>" section.
         *
         * @return string
         */
        protected function getFontsSectionContent()
        {
        }
        /**
         * Returns the content of the "<fills>" section.
         *
         * @return string
         */
        protected function getFillsSectionContent()
        {
        }
        /**
         * Returns the content of the "<borders>" section.
         *
         * @return string
         */
        protected function getBordersSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellStyleXfs>" section.
         *
         * @return string
         */
        protected function getCellStyleXfsSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellXfs>" section.
         *
         * @return string
         */
        protected function getCellXfsSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellStyles>" section.
         *
         * @return string
         */
        protected function getCellStylesSectionContent()
        {
        }
    }
}

namespace Box\Spout\Writer\Style {
    /**
     * Class BorderPart
     */
    class BorderPart
    {
        /**
         * @var string The style of this border part.
         */
        protected $style;
        /**
         * @var string The name of this border part.
         */
        protected $name;
        /**
         * @var string The color of this border part.
         */
        protected $color;
        /**
         * @var string The width of this border part.
         */
        protected $width;
        /**
         * @var array Allowed style constants for parts.
         */
        protected static $allowedStyles = ['none', 'solid', 'dashed', 'dotted', 'double'];
        /**
         * @var array Allowed names constants for border parts.
         */
        protected static $allowedNames = ['left', 'right', 'top', 'bottom'];
        /**
         * @var array Allowed width constants for border parts.
         */
        protected static $allowedWidths = ['thin', 'medium', 'thick'];
        /**
         * @param string $name @see  BorderPart::$allowedNames
         * @param string $color A RGB color code
         * @param string $width @see BorderPart::$allowedWidths
         * @param string $style @see BorderPart::$allowedStyles
         * @throws InvalidNameException
         * @throws InvalidStyleException
         * @throws InvalidWidthException
         */
        public function __construct($name, $color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @return string
         */
        public function getName()
        {
        }
        /**
         * @param string $name The name of the border part @see BorderPart::$allowedNames
         * @throws InvalidNameException
         * @return void
         */
        public function setName($name)
        {
        }
        /**
         * @return string
         */
        public function getStyle()
        {
        }
        /**
         * @param string $style The style of the border part @see BorderPart::$allowedStyles
         * @throws InvalidStyleException
         * @return void
         */
        public function setStyle($style)
        {
        }
        /**
         * @return string
         */
        public function getColor()
        {
        }
        /**
         * @param string $color The color of the border part @see Color::rgb()
         * @return void
         */
        public function setColor($color)
        {
        }
        /**
         * @return string
         */
        public function getWidth()
        {
        }
        /**
         * @param string $width The width of the border part @see BorderPart::$allowedWidths
         * @throws InvalidWidthException
         * @return void
         */
        public function setWidth($width)
        {
        }
        /**
         * @return array
         */
        public static function getAllowedStyles()
        {
        }
        /**
         * @return array
         */
        public static function getAllowedNames()
        {
        }
        /**
         * @return array
         */
        public static function getAllowedWidths()
        {
        }
    }
    /**
     * Class Border
     */
    class Border
    {
        const LEFT = 'left';
        const RIGHT = 'right';
        const TOP = 'top';
        const BOTTOM = 'bottom';
        const STYLE_NONE = 'none';
        const STYLE_SOLID = 'solid';
        const STYLE_DASHED = 'dashed';
        const STYLE_DOTTED = 'dotted';
        const STYLE_DOUBLE = 'double';
        const WIDTH_THIN = 'thin';
        const WIDTH_MEDIUM = 'medium';
        const WIDTH_THICK = 'thick';
        /**
         * @var array A list of BorderPart objects for this border.
         */
        protected $parts = [];
        /**
         * @param array|void $borderParts
         */
        public function __construct(array $borderParts = [])
        {
        }
        /**
         * @param $name The name of the border part
         * @return null|BorderPart
         */
        public function getPart($name)
        {
        }
        /**
         * @param $name The name of the border part
         * @return bool
         */
        public function hasPart($name)
        {
        }
        /**
         * @return array
         */
        public function getParts()
        {
        }
        /**
         * Set BorderParts
         * @param array $parts
         */
        public function setParts($parts)
        {
        }
        /**
         * @param BorderPart $borderPart
         * @return self
         */
        public function addPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class StyleBuilder
     * Builder to create new styles
     *
     * @package Box\Spout\Writer\Style
     */
    class StyleBuilder
    {
        /** @var Style Style to be created */
        protected $style;
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Makes the font bold.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontBold()
        {
        }
        /**
         * Makes the font italic.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontItalic()
        {
        }
        /**
         * Makes the font underlined.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontUnderline()
        {
        }
        /**
         * Makes the font struck through.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontStrikethrough()
        {
        }
        /**
         * Sets the font size.
         *
         * @api
         * @param int $fontSize Font size, in pixels
         * @return StyleBuilder
         */
        public function setFontSize($fontSize)
        {
        }
        /**
         * Sets the font color.
         *
         * @api
         * @param string $fontColor ARGB color (@see Color)
         * @return StyleBuilder
         */
        public function setFontColor($fontColor)
        {
        }
        /**
         * Sets the font name.
         *
         * @api
         * @param string $fontName Name of the font to use
         * @return StyleBuilder
         */
        public function setFontName($fontName)
        {
        }
        /**
         * Makes the text wrap in the cell if requested
         *
         * @api
         * @param bool $shouldWrap Should the text be wrapped
         * @return StyleBuilder
         */
        public function setShouldWrapText($shouldWrap = true)
        {
        }
        /**
         * Set a border
         *
         * @param Border $border
         * @return $this
         */
        public function setBorder(\Box\Spout\Writer\Style\Border $border)
        {
        }
        /**
         *  Sets a background color
         *
         * @api
         * @param string $color ARGB color (@see Color)
         * @return StyleBuilder
         */
        public function setBackgroundColor($color)
        {
        }
        /**
         * Returns the configured style. The style is cached and can be reused.
         *
         * @api
         * @return Style
         */
        public function build()
        {
        }
    }
    /**
     * Class Color
     * This class provides constants and functions to work with colors
     *
     * @package Box\Spout\Writer\Style
     */
    class Color
    {
        /** Standard colors - based on Office Online */
        const BLACK = '000000';
        const WHITE = 'FFFFFF';
        const RED = 'FF0000';
        const DARK_RED = 'C00000';
        const ORANGE = 'FFC000';
        const YELLOW = 'FFFF00';
        const LIGHT_GREEN = '92D040';
        const GREEN = '00B050';
        const LIGHT_BLUE = '00B0E0';
        const BLUE = '0070C0';
        const DARK_BLUE = '002060';
        const PURPLE = '7030A0';
        /**
         * Returns an RGB color from R, G and B values
         *
         * @api
         * @param int $red Red component, 0 - 255
         * @param int $green Green component, 0 - 255
         * @param int $blue Blue component, 0 - 255
         * @return string RGB color
         */
        public static function rgb($red, $green, $blue)
        {
        }
        /**
         * Throws an exception is the color component value is outside of bounds (0 - 255)
         *
         * @param int $colorComponent
         * @return void
         * @throws \Box\Spout\Writer\Exception\InvalidColorException
         */
        protected static function throwIfInvalidColorComponentValue($colorComponent)
        {
        }
        /**
         * Converts the color component to its corresponding hexadecimal value
         *
         * @param int $colorComponent Color component, 0 - 255
         * @return string Corresponding hexadecimal value, with a leading 0 if needed. E.g "0f", "2d"
         */
        protected static function convertColorComponentToHex($colorComponent)
        {
        }
        /**
         * Returns the ARGB color of the given RGB color,
         * assuming that alpha value is always 1.
         *
         * @param string $rgbColor RGB color like "FF08B2"
         * @return string ARGB color
         */
        public static function toARGB($rgbColor)
        {
        }
    }
    /**
     * Class BorderBuilder
     */
    class BorderBuilder
    {
        /**
         * @var Border
         */
        protected $border;
        public function __construct()
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderTop($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderRight($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderBottom($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderLeft($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @return Border
         */
        public function build()
        {
        }
    }
    /**
     * Class Style
     * Represents a style to be applied to a cell
     *
     * @package Box\Spout\Writer\Style
     */
    class Style
    {
        /** Default font values */
        const DEFAULT_FONT_SIZE = 11;
        const DEFAULT_FONT_COLOR = \Box\Spout\Writer\Style\Color::BLACK;
        const DEFAULT_FONT_NAME = 'Arial';
        /** @var int|null Style ID */
        protected $id = null;
        /** @var bool Whether the font should be bold */
        protected $fontBold = false;
        /** @var bool Whether the bold property was set */
        protected $hasSetFontBold = false;
        /** @var bool Whether the font should be italic */
        protected $fontItalic = false;
        /** @var bool Whether the italic property was set */
        protected $hasSetFontItalic = false;
        /** @var bool Whether the font should be underlined */
        protected $fontUnderline = false;
        /** @var bool Whether the underline property was set */
        protected $hasSetFontUnderline = false;
        /** @var bool Whether the font should be struck through */
        protected $fontStrikethrough = false;
        /** @var bool Whether the strikethrough property was set */
        protected $hasSetFontStrikethrough = false;
        /** @var int Font size */
        protected $fontSize = self::DEFAULT_FONT_SIZE;
        /** @var bool Whether the font size property was set */
        protected $hasSetFontSize = false;
        /** @var string Font color */
        protected $fontColor = self::DEFAULT_FONT_COLOR;
        /** @var bool Whether the font color property was set */
        protected $hasSetFontColor = false;
        /** @var string Font name */
        protected $fontName = self::DEFAULT_FONT_NAME;
        /** @var bool Whether the font name property was set */
        protected $hasSetFontName = false;
        /** @var bool Whether specific font properties should be applied */
        protected $shouldApplyFont = false;
        /** @var bool Whether the text should wrap in the cell (useful for long or multi-lines text) */
        protected $shouldWrapText = false;
        /** @var bool Whether the wrap text property was set */
        protected $hasSetWrapText = false;
        /**
         * @var Border
         */
        protected $border = null;
        /**
         * @var bool Whether border properties should be applied
         */
        protected $shouldApplyBorder = false;
        /** @var string Background color */
        protected $backgroundColor = null;
        /** @var bool */
        protected $hasSetBackgroundColor = false;
        /**
         * @return int|null
         */
        public function getId()
        {
        }
        /**
         * @param int $id
         * @return Style
         */
        public function setId($id)
        {
        }
        /**
         * @return Border
         */
        public function getBorder()
        {
        }
        /**
         * @param Border $border
         * @return Style
         */
        public function setBorder(\Box\Spout\Writer\Style\Border $border)
        {
        }
        /**
         * @return bool
         */
        public function shouldApplyBorder()
        {
        }
        /**
         * @return bool
         */
        public function isFontBold()
        {
        }
        /**
         * @return Style
         */
        public function setFontBold()
        {
        }
        /**
         * @return bool
         */
        public function isFontItalic()
        {
        }
        /**
         * @return Style
         */
        public function setFontItalic()
        {
        }
        /**
         * @return bool
         */
        public function isFontUnderline()
        {
        }
        /**
         * @return Style
         */
        public function setFontUnderline()
        {
        }
        /**
         * @return bool
         */
        public function isFontStrikethrough()
        {
        }
        /**
         * @return Style
         */
        public function setFontStrikethrough()
        {
        }
        /**
         * @return int
         */
        public function getFontSize()
        {
        }
        /**
         * @param int $fontSize Font size, in pixels
         * @return Style
         */
        public function setFontSize($fontSize)
        {
        }
        /**
         * @return string
         */
        public function getFontColor()
        {
        }
        /**
         * Sets the font color.
         *
         * @param string $fontColor ARGB color (@see Color)
         * @return Style
         */
        public function setFontColor($fontColor)
        {
        }
        /**
         * @return string
         */
        public function getFontName()
        {
        }
        /**
         * @param string $fontName Name of the font to use
         * @return Style
         */
        public function setFontName($fontName)
        {
        }
        /**
         * @return bool
         */
        public function shouldWrapText()
        {
        }
        /**
         * @param bool|void $shouldWrap Should the text be wrapped
         * @return Style
         */
        public function setShouldWrapText($shouldWrap = true)
        {
        }
        /**
         * @return bool
         */
        public function hasSetWrapText()
        {
        }
        /**
         * @return bool Whether specific font properties should be applied
         */
        public function shouldApplyFont()
        {
        }
        /**
         * Sets the background color
         * @param string $color ARGB color (@see Color)
         * @return Style
         */
        public function setBackgroundColor($color)
        {
        }
        /**
         * @return string
         */
        public function getBackgroundColor()
        {
        }
        /**
         *
         * @return bool Whether the background color should be applied
         */
        public function shouldApplyBackgroundColor()
        {
        }
        /**
         * Serializes the style for future comparison with other styles.
         * The ID is excluded from the comparison, as we only care about
         * actual style properties.
         *
         * @return string The serialized style
         */
        public function serialize()
        {
        }
        /**
         * Merges the current style with the given style, using the given style as a base. This means that:
         *   - if current style and base style both have property A set, use current style property's value
         *   - if current style has property A set but base style does not, use current style property's value
         *   - if base style has property A set but current style does not, use base style property's value
         *
         * @NOTE: This function returns a new style.
         *
         * @param Style $baseStyle
         * @return Style New style corresponding to the merge of the 2 styles
         */
        public function mergeWith($baseStyle)
        {
        }
    }
}

namespace Box\Spout\Writer\Common {
    /**
     * Class Sheet
     * External representation of a worksheet
     *
     * @package Box\Spout\Writer\Common
     */
    class Sheet
    {
        const DEFAULT_SHEET_NAME_PREFIX = 'Sheet';
        /** Sheet name should not exceed 31 characters */
        const MAX_LENGTH_SHEET_NAME = 31;
        /** @var array Associative array [WORKBOOK_ID] => [[SHEET_INDEX] => [SHEET_NAME]] keeping track of sheets' name to enforce uniqueness per workbook */
        protected static $SHEETS_NAME_USED = [];
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string ID of the sheet's associated workbook. Used to restrict sheet name uniqueness enforcement to a single workbook */
        protected $associatedWorkbookId;
        /** @var string Name of the sheet */
        protected $name;
        /** @var \Box\Spout\Common\Helper\StringHelper */
        protected $stringHelper;
        /**
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $associatedWorkbookId ID of the sheet's associated workbook
         */
        public function __construct($sheetIndex, $associatedWorkbookId)
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * Sets the name of the sheet. Note that Excel has some restrictions on the name:
         *  - it should not be blank
         *  - it should not exceed 31 characters
         *  - it should not contain these characters: \ / ? * : [ or ]
         *  - it should be unique
         *
         * @api
         * @param string $name Name of the sheet
         * @return Sheet
         * @throws \Box\Spout\Writer\Exception\InvalidSheetNameException If the sheet's name is invalid.
         */
        public function setName($name)
        {
        }
        /**
         * Throws an exception if the given sheet's name is not valid.
         * @see Sheet::setName for validity rules.
         *
         * @param string $name
         * @return void
         * @throws \Box\Spout\Writer\Exception\InvalidSheetNameException If the sheet's name is invalid.
         */
        protected function throwIfNameIsInvalid($name)
        {
        }
        /**
         * Returns whether the given name contains at least one invalid character.
         * @see Sheet::$INVALID_CHARACTERS_IN_SHEET_NAME for the full list.
         *
         * @param string $name
         * @return bool TRUE if the name contains invalid characters, FALSE otherwise.
         */
        protected function doesContainInvalidCharacters($name)
        {
        }
        /**
         * Returns whether the given name starts or ends with a single quote
         *
         * @param string $name
         * @return bool TRUE if the name starts or ends with a single quote, FALSE otherwise.
         */
        protected function doesStartOrEndWithSingleQuote($name)
        {
        }
        /**
         * Returns whether the given name is unique.
         *
         * @param string $name
         * @return bool TRUE if the name is unique, FALSE otherwise.
         */
        protected function isNameUnique($name)
        {
        }
    }
}

namespace Box\Spout\Writer\Common\Helper {
    /**
     * Class ZipHelper
     * This class provides helper functions to create zip files
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    class ZipHelper
    {
        const ZIP_EXTENSION = '.zip';
        /** Controls what to do when trying to add an existing file */
        const EXISTING_FILES_SKIP = 'skip';
        const EXISTING_FILES_OVERWRITE = 'overwrite';
        /** @var string Path of the folder where the zip file will be created */
        protected $tmpFolderPath;
        /** @var \ZipArchive The ZipArchive instance */
        protected $zip;
        /**
         * @param string $tmpFolderPath Path of the temp folder where the zip file will be created
         */
        public function __construct($tmpFolderPath)
        {
        }
        /**
         * Returns the already created ZipArchive instance or
         * creates one if none exists.
         *
         * @return \ZipArchive
         */
        protected function createOrGetZip()
        {
        }
        /**
         * @return string Path where the zip file of the given folder will be created
         */
        public function getZipFilePath()
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will be compressed.
         *
         * Example of use:
         *   addFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addFileToArchive($rootFolderPath, $localFilePath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will NOT be compressed.
         *
         * Example of use:
         *   addUncompressedFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addUncompressedFileToArchive($rootFolderPath, $localFilePath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will NOT be compressed.
         *
         * Example of use:
         *   addUncompressedFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string $existingFileMode Controls what to do when trying to add an existing file
         * @param int $compressionMethod The compression method
         * @return void
         */
        protected function addFileToArchiveWithCompressionMethod($rootFolderPath, $localFilePath, $existingFileMode, $compressionMethod)
        {
        }
        /**
         * @return bool Whether it is possible to choose the desired compression method to be used
         */
        public static function canChooseCompressionMethod()
        {
        }
        /**
         * @param string $folderPath Path to the folder to be zipped
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addFolderToArchive($folderPath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * @param \ZipArchive $zip
         * @param string $itemLocalPath
         * @param string $existingFileMode
         * @return bool Whether the file should be added to the archive or skipped
         */
        protected function shouldSkipFile($zip, $itemLocalPath, $existingFileMode)
        {
        }
        /**
         * Returns canonicalized absolute pathname, containing only forward slashes.
         *
         * @param string $path Path to normalize
         * @return string Normalized and canonicalized path
         */
        protected function getNormalizedRealPath($path)
        {
        }
        /**
         * Closes the archive and copies it into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function closeArchiveAndCopyToStream($streamPointer)
        {
        }
        /**
         * Streams the contents of the zip file into the given stream
         *
         * @param resource $pointer Pointer to the stream to copy the zip
         * @return void
         */
        protected function copyZipToStream($pointer)
        {
        }
    }
    /**
     * Class CellHelper
     * This class provides helper functions when working with cells
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    class CellHelper
    {
        /**
         * Returns the cell index (base 26) associated to the base 10 column index.
         * Excel uses A to Z letters for column indexing, where A is the 1st column,
         * Z is the 26th and AA is the 27th.
         * The mapping is zero based, so that 0 maps to A, B maps to 1, Z to 25 and AA to 26.
         *
         * @param int $columnIndex The Excel column index (0, 42, ...)
         * @return string The associated cell index ('A', 'BC', ...)
         */
        public static function getCellIndexFromColumnIndex($columnIndex)
        {
        }
        /**
         * @param $value
         * @return bool Whether the given value is considered "empty"
         */
        public static function isEmpty($value)
        {
        }
        /**
         * @param $value
         * @return bool Whether the given value is a non empty string
         */
        public static function isNonEmptyString($value)
        {
        }
        /**
         * Returns whether the given value is numeric.
         * A numeric value is from type "integer" or "double" ("float" is not returned by gettype).
         *
         * @param $value
         * @return bool Whether the given value is numeric
         */
        public static function isNumeric($value)
        {
        }
        /**
         * Returns whether the given value is boolean.
         * "true"/"false" and 0/1 are not booleans.
         *
         * @param $value
         * @return bool Whether the given value is boolean
         */
        public static function isBoolean($value)
        {
        }
    }
}

namespace Box\Spout\Writer\CSV {
    /**
     * Class Writer
     * This class provides support to write data to CSV files
     *
     * @package Box\Spout\Writer\CSV
     */
    class Writer extends \Box\Spout\Writer\AbstractWriter
    {
        /** Number of rows to write before flushing */
        const FLUSH_THRESHOLD = 500;
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'text/csv; charset=UTF-8';
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter = ',';
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure = '"';
        /** @var int */
        protected $lastWrittenRowIndex = 0;
        /** @var bool */
        protected $shouldAddBOM = true;
        /**
         * Sets the field delimiter for the CSV
         *
         * @api
         * @param string $fieldDelimiter Character that delimits fields
         * @return Writer
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * Sets the field enclosure for the CSV
         *
         * @api
         * @param string $fieldEnclosure Character that enclose fields
         * @return Writer
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * Set if a BOM has to be added to the file
         *
         * @param bool $shouldAddBOM
         * @return Writer
         */
        public function setShouldAddBOM($shouldAddBOM)
        {
        }
        /**
         * Opens the CSV streamer and makes it ready to accept data.
         *
         * @return void
         */
        protected function openWriter()
        {
        }
        /**
         * Adds data to the currently opened writer.
         *
         * @param  array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Ignored here since CSV does not support styling.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Closes the CSV streamer, preventing any additional writing.
         * If set, sets the headers and redirects output to the browser.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}

namespace Box\Spout\Writer {
    /**
     * Class WriterFactory
     * This factory is used to create writers, based on the type of the file to be read.
     * It supports CSV, XLSX and ODS formats.
     *
     * @package Box\Spout\Writer
     */
    class WriterFactory
    {
        /**
         * This creates an instance of the appropriate writer, given the type of the file to be read
         *
         * @api
         * @param  string $writerType Type of the writer to instantiate
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\UnsupportedTypeException
         */
        public static function create($writerType)
        {
        }
    }
}

namespace Box\Spout\Writer\Exception {
    /**
     * Class WriterException
     *
     * @package Box\Spout\Writer\Exception
     * @abstract
     */
    abstract class WriterException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
}

namespace Box\Spout\Writer\Exception\Border {
    class InvalidStyleException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
    class InvalidNameException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
    class InvalidWidthException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
}

namespace Box\Spout\Writer\Exception {
    /**
     * Class WriterAlreadyOpenedException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class WriterAlreadyOpenedException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class InvalidColorException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class InvalidColorException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class InvalidSheetNameException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class InvalidSheetNameException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class SheetNotFoundException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class SheetNotFoundException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class WriterNotOpenedException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class WriterNotOpenedException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
}

namespace Box\Spout\Autoloader {
    /**
     * Class Psr4Autoloader
     * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md#class-example
     *
     * @package Box\Spout\Autoloader
     */
    class Psr4Autoloader
    {
        /**
         * An associative array where the key is a namespace prefix and the value
         * is an array of base directories for classes in that namespace.
         *
         * @var array
         */
        protected $prefixes = array();
        /**
         * Register loader with SPL autoloader stack.
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Adds a base directory for a namespace prefix.
         *
         * @param string $prefix The namespace prefix.
         * @param string $baseDir A base directory for class files in the
         * namespace.
         * @param bool $prepend If true, prepend the base directory to the stack
         * instead of appending it; this causes it to be searched first rather
         * than last.
         * @return void
         */
        public function addNamespace($prefix, $baseDir, $prepend = false)
        {
        }
        /**
         * Loads the class file for a given class name.
         *
         * @param string $class The fully-qualified class name.
         * @return mixed The mapped file name on success, or boolean false on
         * failure.
         */
        public function loadClass($class)
        {
        }
        /**
         * Load the mapped file for a namespace prefix and relative class.
         *
         * @param string $prefix The namespace prefix.
         * @param string $relativeClass The relative class name.
         * @return mixed Boolean false if no mapped file can be loaded, or the
         * name of the mapped file that was loaded.
         */
        protected function loadMappedFile($prefix, $relativeClass)
        {
        }
        /**
         * If a file exists, require it from the file system.
         *
         * @param string $file The file to require.
         * @return bool True if the file exists, false if not.
         */
        protected function requireFile($file)
        {
        }
    }
}

namespace FluentForm\App\Services\Migrator\Classes {
    abstract class BaseMigrator
    {
        public $key;
        public $title;
        public $shortcode;
        public $submitBtn;
        public $unSupportFields = [];
        public function import_forms($selectedForms = [])
        {
        }
        protected abstract function getForms();
        protected abstract function getFields($form);
        protected abstract function getFormName($form);
        protected abstract function getFormMetas($form);
        public function getFluentClassicField($field, $args = [])
        {
        }
        public static function defaultFieldConfig($args)
        {
        }
        public function getSubmitBttn($args)
        {
        }
        protected abstract function getFormId($form);
        /**
         * @param $metas
         * @param $formId
         */
        protected function updateMetas($metas, $formId)
        {
        }
        /**
         * @param array $form
         * @param array $insertedForms
         * @param $formItem
         * @param array $refs
         * @return array
         */
        public function insertForm($form, $insertedForms, $formItem)
        {
        }
        protected function getFileTypes($field, $arg)
        {
        }
        public function isAlreadyImported($formItem)
        {
        }
        public function updateForm($formId, $formFields, $insertedForms)
        {
        }
        public function insertEntries($fluentFormId, $importFormId)
        {
        }
    }
    class GravityFormsMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        public function exist()
        {
        }
        /**
         * @param $form
         * @return array
         */
        public function getFields($form)
        {
        }
        /**
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * @param $options
         * @return array
         */
        public function getOptions($options = [])
        {
        }
        /**
         * @param $repeaterFields
         * @param $label
         * @return array
         */
        protected function getRepeaterFields($repeaterFields, $label)
        {
        }
        protected static function getLayout($fields, $id = '')
        {
        }
        public static function getInputIdsFromLayoutGrp($id, $array)
        {
        }
        /**
         * @param null $array
         * @param int $depth
         * @return array
         */
        public static function arrayFlat($array = null, $depth = 1)
        {
        }
        /**
         * @param $form
         * @return array default parsed form metas
         * @throws \Exception
         */
        public function getFormMetas($form)
        {
        }
        public function getFormsFormatted()
        {
        }
        protected function getForms()
        {
        }
        protected function getForm($id)
        {
        }
        protected function getFormName($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
    }
    class NinjaFormsMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        /**
         * Check if form type exists
         * @return bool
         */
        public function exist()
        {
        }
        /**
         * Get array of all forms
         * @return array Forms with fields
         */
        public function getForms()
        {
        }
        public function getForm($id)
        {
        }
        public function getFormsFormatted()
        {
        }
        /**
         *
         * Get formatted fields form array
         * @param array $form
         * @return array fluentform data formatted for database
         */
        public function getFields($form)
        {
        }
        /**
         * Format each field with proper data
         * @param $field
         * @return array required arguments for single field
         */
        protected function formatFieldData($field)
        {
        }
        /**
         * Get field type in fluentforms type
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * Get formatted options for select,radio etc type fields
         * @param $options
         * @param bool $hasImage
         * @return array (options list and selected option)
         */
        public function getOptions($options, $hasImage = false)
        {
        }
        /**
         * Get Form Metas
         * @param $form
         * @return array
         */
        public function getFormMetas($form)
        {
        }
        /**
         * Update recaptcha key if already not has
         */
        protected function addRecaptcha()
        {
        }
        /**
         * Get shortcode in fluentforms format
         * @return array
         */
        protected function dynamicShortcodes()
        {
        }
        /**
         * Get form settings
         * @param $form
         * @return array $formSettings
         */
        protected function getFormSettings($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormName($form)
        {
        }
        public function getEntries($formId)
        {
        }
        public function getFieldKeyMaps($form)
        {
        }
        /**
         * @param array $values
         * @return array
         */
        public function formatEntries(array $values)
        {
        }
    }
    class CalderaMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        /**
         * @return bool
         */
        public function exist()
        {
        }
        /**
         * @return array
         */
        public function getForms()
        {
        }
        public function getForm($id)
        {
        }
        public function getFormsFormatted()
        {
        }
        /**
         * @param $form
         * @return array
         */
        public function getFields($form)
        {
        }
        /**
         * @return array
         */
        public function fieldPrefix()
        {
        }
        /**
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * @param $options
         * @return array
         */
        public function getOptions($options)
        {
        }
        /**
         * @param null $array
         * @param int $depth
         * @return array
         */
        public static function arrayFlat($array = null, $depth = 1)
        {
        }
        /**
         * @param $form
         * @return array default parsed form metas
         * @throws \Exception
         */
        public function getFormMetas($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormName($form)
        {
        }
        public function getEntries($formId)
        {
        }
        /**
         * Map Field key with its name to insert entry with input name
         *
         * @param array|null $form
         * @return array|mixed
         */
        public function getFieldsNameMap($form)
        {
        }
    }
}

namespace FluentForm\App\Services\Migrator {
    class Bootstrap
    {
        protected $importer;
        public function boot()
        {
        }
        public function availableMigrations()
        {
        }
        public function setImporterType()
        {
        }
        public function getMigratorData()
        {
        }
        public function importForms()
        {
        }
        public function importEntries()
        {
        }
        public function hasOtherForms()
        {
        }
        public function getFormsByKey()
        {
        }
    }
}

namespace FluentForm\App\Services\WPAsync {
    class FluentFormAsyncRequest
    {
        /**
         * $prefix The prefix for the identifier
         * @var string
         */
        protected $table = 'ff_scheduled_actions';
        /**
         * $action The action for the identifier
         * @var string
         */
        protected $action = 'fluentform_background_process';
        /**
         * $actions Actions to be fired when an async request is sent
         * @var array
         */
        protected $actions = array();
        /**
         * $app Instance of Application/Framework
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app = null;
        /**
         * Construct the Object
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function queueFeeds($feeds)
        {
        }
        public function dispatchAjax($data = [])
        {
        }
        public function handleBackgroundCall()
        {
        }
        public function processActions($originId = false)
        {
        }
    }
}

namespace FluentForm\App\Services\FluentConversational\Classes\Converter {
    class Converter
    {
        public static function convert($form)
        {
        }
        public static function convertExistingForm($form)
        {
        }
        public static function fieldTypes()
        {
        }
        public static function hasPictureMode($field, $question)
        {
        }
        public static function hex2rgb($color, $opacity = 0.3)
        {
        }
        public static function getPhoneFieldSettings($data, $form)
        {
        }
        /**
         * Load country list from file
         * @param array $data
         * @return array
         */
        public static function loadCountries($data)
        {
        }
        public static function getSelectedCountries($keys = [])
        {
        }
        public static function setDefaultValue($value, $field, $form)
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder\Components {
    class BaseComponent
    {
        public $app;
        public function __construct($key = '', $title = '', $tags = [], $position = 'advanced')
        {
        }
        /**
         * Build unique ID concating form id and name attribute
         * @param array $data $form
         * @return string for id value
         */
        protected function makeElementId($data, $form)
        {
        }
        /**
         * Build attributes for any html element
         * @param array $attributes
         * @return string [Compiled key='value' attributes]
         */
        protected function buildAttributes($attributes, $form = null)
        {
        }
        /**
         * Extract value attribute from attribute list
         * @param array  &$element
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
         * @param array $element [Html element being compiled]
         * @return boolean
         */
        protected function hasConditions($element)
        {
        }
        /**
         * Generate a unique id for an element
         * @param string $str [preix]
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
         * @param array $rules [Validation rules]
         * @return mixed
         */
        protected function getRequiredClass($rules)
        {
        }
        /**
         * Get asterisk placement for the required form elements
         * @return String
         */
        protected function getAsteriskPlacement($form)
        {
        }
        /**
         * Generate a label for any element
         * @param array $data
         * @return string [label Html element]
         */
        protected function buildElementLabel($data, $form)
        {
        }
        /**
         * Generate html/markup for any element
         * @param string $elMarkup [Predifined partial markup]
         * @param array $data
         * @param StdClass $form [Form object]
         * @return string   [Compiled markup]
         */
        protected function buildElementMarkup($elMarkup, $data, $form)
        {
        }
        /**
         * Generate a help message for any element beside label
         * @param array $data
         * @return string [Html]
         */
        protected function getLabelHelpMessage($data)
        {
        }
        /**
         * Generate a help message for any element beside form element
         * @param array $data
         * @return string [Html]
         */
        protected function getInputHelpMessage($data, $hideClass = '')
        {
        }
        protected function parseEditorSmartCode($text, $form)
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder {
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
        abstract function getComponent();
        abstract function render($element, $form);
    }
}

namespace FluentForm\App\Services\FluentConversational\Classes\Elements {
    class WelcomeScreen extends \FluentForm\App\Services\FormBuilder\BaseFieldManager
    {
        public function __construct()
        {
        }
        public function getComponent()
        {
        }
        public function pushConversationalComponent($components)
        {
        }
        public function getGeneralEditorElements()
        {
        }
        public function getAdvancedEditorElements()
        {
        }
        public function pushFormInputType($types)
        {
        }
        public function render($data, $form)
        {
        }
    }
}

namespace FluentForm\App\Services\FluentConversational\Classes {
    class Fonts
    {
        public static function getFonts()
        {
        }
        public static function getAllFonts()
        {
        }
        public static function getSystemFonts()
        {
        }
        public static function getGoogleFonts()
        {
        }
    }
    class Form
    {
        protected $addOnKey = 'conversational_forms';
        protected $metaKey = 'ffc_form_settings';
        public function boot()
        {
        }
        public function pushDesignTab($menuItems, $formId)
        {
        }
        public function renderDesignSettings($formId)
        {
        }
        public function getSettingsAjax()
        {
        }
        public function saveSettingsAjax()
        {
        }
        public function getDesignSettings($formId)
        {
        }
        public function getMetaSettings($formId)
        {
        }
        public function render()
        {
        }
        public function isEnabled()
        {
        }
        public function filterAcceptedFields($components, $formId)
        {
        }
        public function printLoadedScripts()
        {
        }
        public function renderShortcode($form)
        {
        }
        public function maybeAlterPlacement($placements, $form)
        {
        }
        public function getRandomPhoto()
        {
        }
    }
}

namespace FluentValidator {
    class ValidationRuleParser
    {
        /**
         * The data being validated.
         *
         * @var array
         */
        public $data;
        /**
         * Create a new validation rule parser.
         *
         * @param array $data
         *
         * @return void
         */
        public function __construct(array $data)
        {
        }
        /**
         * Parse the human-friendly rules into a full rules array for the validator.
         *
         * @param $rules
         *
         * @return array
         */
        public function explode($rules)
        {
        }
        /**
         * Explode the rules into an array of explicit rules.
         *
         * @param array $rules
         *
         * @return array
         */
        protected function explodeRules($rules)
        {
        }
        /**
         * Explode the explicit rule into an array if necessary.
         *
         * @param mixed $rule
         *
         * @return array
         */
        protected function explodeExplicitRule($rule)
        {
        }
        /**
         * Define a set of rules that apply to each element in an array attribute.
         *
         * @param array $results
         * @param string $attribute
         * @param string|array $rules
         *
         * @return array
         */
        protected function explodeWildcardRules($results, $attribute, $rules)
        {
        }
        /**
         * Merge additional rules into a given attribute(s).
         *
         * @param array $results
         * @param string|array $attribute
         * @param string|array $rules
         *
         * @return array
         */
        public function mergeRules($results, $attribute, $rules = [])
        {
        }
        /**
         * Merge additional rules into a given attribute.
         *
         * @param array $results
         * @param string $attribute
         * @param string|array $rules
         *
         * @return array
         */
        protected function mergeRulesForAttribute($results, $attribute, $rules)
        {
        }
        /**
         * Extract the rule name and parameters from a rule.
         *
         * @param $rule
         *
         * @return array
         */
        public static function parse($rule)
        {
        }
    }
    trait ValidatesAttributes
    {
        /**
         * Require a certain number of parameters to be present.
         *
         * @param int $count
         * @param array $parameters
         * @param string $rule
         *
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        protected function requireParameterCount($count, $parameters, $rule)
        {
        }
        /**
         * Get the size of an attribute.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return mixed
         */
        protected function getSize($attribute, $value)
        {
        }
        /**
         * Deduce the value type of an attribute.
         *
         * @param $value
         *
         * @return string
         */
        protected function deduceType($value)
        {
        }
        /**
         * Convert the given values to boolean if they are string "true" / "false".
         *
         * @param array $values
         *
         * @return array
         */
        protected function convertValuesToBoolean($values)
        {
        }
        /**
         * Validate that a required attribute exists.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateRequired($attribute, $value)
        {
        }
        /**
         * Validate that an attribute exists when another attribute has a given value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param mixed $parameters
         *
         * @return bool
         */
        protected function validateRequiredIf($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that an attribute is a valid e-mail address.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateEmail($attribute, $value)
        {
        }
        /**
         * Validate the size of an attribute.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateSize($attribute, $value, $parameters)
        {
        }
        /**
         * Validate the size of an attribute is greater than a minimum value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMin($attribute, $value, $parameters)
        {
        }
        /**
         * Validate the size of an attribute is less than a maximum value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMax($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that two attributes match.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateSame($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that an attribute is a valid URL.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateUrl($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is numeric.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateNumeric($attribute, $value)
        {
        }
        /**
         * Validate the guessed extension of a file upload is in a set of file extensions.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMimes($attribute, $value, $parameters)
        {
        }
        /**
         * Check that the given value is a valid file instance.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public function isValidFileInstance($value)
        {
        }
        /**
         * Check if PHP uploads are explicitly allowed.
         *
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function shouldBlockPhpUpload($value, $parameters)
        {
        }
        /**
         * Validate that an attribute exists even if not filled.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validatePresent($attribute, $value)
        {
        }
        /**
         * Validate that an attribute has a given number of digits.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         * 
         * @return bool
         */
        public function validateDigits($attribute, $value, $parameters)
        {
        }
    }
    trait MessageBag
    {
        /**
         * The default message bag.
         *
         * @var array
         */
        protected $bag = ['email' => 'The :attribute must be a valid email address.', 'max' => ['numeric' => 'The :attribute may not be greater than :max.', 'file' => 'The :attribute may not be greater than :max kilobytes.', 'string' => 'The :attribute may not be greater than :max characters.', 'array' => 'The :attribute may not have more than :max items.'], 'mimes' => 'The :attribute must be a file of type: :values.', 'mimetypes' => 'The :attribute must be a file of type: :values.', 'min' => ['numeric' => 'The :attribute must be at least :min.', 'file' => 'The :attribute must be at least :min kilobytes.', 'string' => 'The :attribute must be at least :min characters.', 'array' => 'The :attribute must have at least :min items.'], 'numeric' => 'The :attribute must be a number.', 'required' => 'The :attribute field is required.', 'required_if' => 'The :attribute field is required when :other is :value.', 'same' => 'The :attribute and :other must match.', 'size' => ['numeric' => 'The :attribute must be :size.', 'file' => 'The :attribute must be :size kilobytes.', 'string' => 'The :attribute must be :size characters.', 'array' => 'The :attribute must contain :size items.'], 'url' => 'The :attribute format is invalid.', 'digits' => 'The :attribute must be :digits characters.'];
        /**
         * Generate a validation error message.
         *
         * @param $attribute
         * @param $rule
         * @param $parameters
         *
         * @return mixed
         */
        protected function generate($attribute, $rule, $parameters)
        {
        }
        /**
         * Get the replacement text of the error message.
         *
         * @param $customMessagesKey
         * @param $bagAccessor
         *
         * @return string
         */
        protected function getReplacementText($customMessagesKey, $bagAccessor)
        {
        }
        /**
         * Make bag accessor key.
         *
         * @param $attribute
         * @param $rule
         *
         * @return string
         */
        protected function makeBagKey($attribute, $rule)
        {
        }
        /**
         * Replace all place-holders for the required rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceRequired($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the required if rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceRequiredIf($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the email rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceEmail($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the size rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceSize($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the min rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMin($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the max rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMax($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the min rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceSame($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the url rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceUrl($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the numeric rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceNumeric($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the mimes rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMimes($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the digits rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceDigits($attribute, $parameters)
        {
        }
    }
    class Validator
    {
        use \FluentValidator\ValidatesAttributes, \FluentValidator\MessageBag;
        /**
         * The data under validation.
         *
         * @var array
         */
        protected $data;
        /**
         * The rules to be applied to the data.
         *
         * @var array
         */
        protected $rules = [];
        /**
         * All of the error messages.
         *
         * @var array
         */
        protected $messages;
        /**
         * All of the user provided messages.
         *
         * @var array
         */
        protected $customMessages = [];
        /**
         * The validation rules that imply the field is required.
         *
         * @var array
         */
        protected $implicitRules = ['Required', 'Filled', 'RequiredWith', 'RequiredWithAll', 'RequiredWithout', 'RequiredWithoutAll', 'RequiredIf', 'RequiredUnless', 'Accepted', 'Present'];
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         *
         * @return void
         */
        public function __construct(array $data = [], array $rules = [], array $messages = [])
        {
        }
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         *
         * @return \FluentValidator\Validator
         */
        public static function make(array $data = [], array $rules = [], array $messages = [])
        {
        }
        /**
         * Set the validation rules.
         *
         * @param array $rules
         *
         * @return $this
         */
        protected function setRules(array $rules = [])
        {
        }
        /**
         * Validate the data against the provided rules.
         *
         * @return $this
         */
        public function validate()
        {
        }
        /**
         * Validate each of the attribute of the data.
         *
         * @param $attribute
         * @param $rule
         *
         * @return void
         */
        protected function validateAttribute($attribute, $rule)
        {
        }
        /**
         * Access the data by attribute name.
         *
         * @param $attribute
         *
         * @return mixed
         */
        protected function getValue($attribute)
        {
        }
        /**
         * Add error message upon validation failed of an attribute.
         *
         * @param $attribute
         * @param $rule
         * @param $parameters
         *
         * @return void
         */
        protected function addFailure($attribute, $rule, $parameters)
        {
        }
        /**
         * Get all of the validation error messages.
         *
         * @return array
         */
        public function errors()
        {
        }
        /**
         * Determine if the data passes the validation rules.
         *
         * @return bool
         */
        public function passes()
        {
        }
        /**
         * Determine if the data fails the validation rules.
         *
         * @return bool
         */
        public function fails()
        {
        }
        /**
         * Add conditions to a given field based on a Closure.
         *
         * @param string|array $attribute
         * @param string|array $rules
         * @param callable $callback
         *
         * @return $this
         */
        public function sometimes($attribute, $rules, callable $callback)
        {
        }
        /**
         * Determine if the attribute has a required rule.
         *
         * @param $attribute
         *
         * @return bool
         */
        public function hasRequired($attribute)
        {
        }
        /**
         * Determine if the attribute should be validated.
         *
         * @param $method
         * @param $attribute
         * @param $value
         *
         * @return bool
         */
        public function shouldValidate($method, $rule, $attribute, $value)
        {
        }
        /**
         * Determines if this object has this method.
         *
         * @param $method
         *
         * @return bool
         */
        public function hasMethod($method)
        {
        }
        /**
         * Determine if a given rule implies the attribute is required.
         *
         * @param string $rule
         *
         * @return bool
         */
        protected function isImplicit($rule)
        {
        }
        /**
         * Determine if the field is present, or the rule implies required.
         *
         * @param string $rule
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function presentOrRuleIsImplicit($rule, $attribute, $value)
        {
        }
    }
}

namespace FluentValidator\Contracts {
    interface File
    {
        /**
         * Returns whether the file was uploaded successfully.
         *
         * @return bool
         */
        public function isValid();
        /**
         * Gets the path without filename
         *
         * @return string
         */
        public function getPath();
        /**
         * Take an educated guess of the file's extension.
         *
         * @return mixed|null
         */
        public function guessExtension();
        /**
         * Returns the original file extension.
         *
         * @return string
         */
        public function getClientOriginalExtension();
    }
}

namespace FluentValidator {
    class ValidationData
    {
        public static function initializeAndGatherData($attribute, $masterData)
        {
        }
        /**
         * Gather a copy of the attribute data filled with any missing attributes.
         *
         * @param string $attribute
         * @param array $masterData
         *
         * @return array
         */
        protected static function initializeAttributeOnData($attribute, $masterData)
        {
        }
        /**
         * Get all of the exact attribute values for a given wildcard attribute.
         *
         * @param array $masterData
         * @param array $data
         * @param string $attribute
         *
         * @return array
         */
        protected static function extractValuesForWildcards($masterData, $data, $attribute)
        {
        }
        /**
         * Extract data based on the given dot-notated path.
         *
         * Used to extract a sub-section of the data for faster iteration.
         *
         * @param string $attribute
         * @param array $masterData
         *
         * @return array
         */
        public static function extractDataFromPath($attribute, $masterData)
        {
        }
        /**
         * Get the explicit part of the attribute name.
         *
         * E.g. 'foo.bar.*.baz' -> 'foo.bar'
         *
         * Allows us to not spin through all of the flattened data for some operations.
         *
         * @param string $attribute
         *
         * @return string
         */
        public static function getLeadingExplicitAttributePath($attribute)
        {
        }
        /**
         * Set an item on an array or object using dot notation.
         *
         * @param mixed $target
         * @param string|array $key
         * @param mixed $value
         * @param bool $overwrite
         *
         * @return mixed
         */
        function data_set(&$target, $key, $value, $overwrite = true)
        {
        }
    }
    /**
     * Class Arr: Taken from Illuminate\Support\Arr (Laravel Framework)
     *
     * @package FluentValidator
     */
    class Arr
    {
        /**
         * Check if an item or items exist in an array using "dot" notation.
         *
         * @param \ArrayAccess|array $array
         * @param string|array $keys
         *
         * @return bool
         */
        public static function has($array, $keys)
        {
        }
        /**
         * Get an item from an array using "dot" notation.
         *
         * @param \ArrayAccess|array $array
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         */
        public static function get($array, $key, $default = null)
        {
        }
        /**
         * Set an array item to a given value using "dot" notation.
         *
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param array $array
         * @param string $key
         * @param mixed $value
         *
         * @return array
         */
        public static function set(&$array, $key, $value)
        {
        }
        /**
         * Get a subset of the items from the given array.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return array
         */
        public static function only($array, $keys)
        {
        }
        /**
         * Get all of the given array except for a specified array of items.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return array
         */
        public static function except($array, $keys)
        {
        }
        /**
         * Remove one or many array items from a given array using "dot" notation.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return void
         */
        public static function forget(&$array, $keys)
        {
        }
        /**
         * Determine whether the given value is array accessible.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function accessible($value)
        {
        }
        /**
         * Determine if the given key exists in the provided array.
         *
         * @param \ArrayAccess|array $array
         * @param string|int $key
         *
         * @return bool
         */
        public static function exists($array, $key)
        {
        }
        /**
         * Return the default value of the given value.
         *
         * @param mixed $value
         *
         * @return mixed
         */
        public static function value($value)
        {
        }
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @param array $array
         * @param string $prepend
         *
         * @return array
         */
        public static function dot($array, $prepend = '')
        {
        }
    }
}

namespace FluentForm\App\Services\Scheduler {
    class Scheduler
    {
        public static function processEmailReport()
        {
        }
    }
}

namespace FluentForm\App\Services\Emogrifier {
    /**
     * This class provides functions for converting CSS styles into inline style attributes in your HTML code.
     *
     * For more information, please see the README.md file.
     *
     * @version 2.0.0
     *
     * @author Cameron Brooks
     * @author Jaime Prado
     * @author Oliver Klee <github@oliverklee.de>
     * @author Roman Ožana <ozana@omdesign.cz>
     * @author Sander Kruger <s.kruger@invessel.com>
     * @author Zoli Szabó <zoli.szabo+github@gmail.com>
     */
    class Emogrifier
    {
        /**
         * @var int
         */
        const CACHE_KEY_CSS = 0;
        /**
         * @var int
         */
        const CACHE_KEY_SELECTOR = 1;
        /**
         * @var int
         */
        const CACHE_KEY_XPATH = 2;
        /**
         * @var int
         */
        const CACHE_KEY_CSS_DECLARATIONS_BLOCK = 3;
        /**
         * @var int
         */
        const CACHE_KEY_COMBINED_STYLES = 4;
        /**
         * for calculating nth-of-type and nth-child selectors
         *
         * @var int
         */
        const INDEX = 0;
        /**
         * for calculating nth-of-type and nth-child selectors
         *
         * @var int
         */
        const MULTIPLIER = 1;
        /**
         * @var string
         */
        const ID_ATTRIBUTE_MATCHER = '/(\\w+)?\\#([\\w\\-]+)/';
        /**
         * @var string
         */
        const CLASS_ATTRIBUTE_MATCHER = '/(\\w+|[\\*\\]])?((\\.[\\w\\-]+)+)/';
        /**
         * @var string
         */
        const CONTENT_TYPE_META_TAG = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
        /**
         * @var string
         */
        const DEFAULT_DOCUMENT_TYPE = '<!DOCTYPE html>';
        /**
         * The constructor.
         *
         * @param string $html the HTML to emogrify, must be UTF-8-encoded
         * @param string $css the CSS to merge, must be UTF-8-encoded
         */
        public function __construct($html = '', $css = '')
        {
        }
        /**
         * The destructor.
         */
        public function __destruct()
        {
        }
        /**
         * Sets the HTML to emogrify.
         *
         * @param string $html the HTML to emogrify, must be UTF-8-encoded
         *
         * @return void
         */
        public function setHtml($html)
        {
        }
        /**
         * Sets the CSS to merge with the HTML.
         *
         * @param string $css the CSS to merge, must be UTF-8-encoded
         *
         * @return void
         */
        public function setCss($css)
        {
        }
        /**
         * Applies $this->css to $this->html and returns the HTML with the CSS
         * applied.
         *
         * This method places the CSS inline.
         *
         * @return string
         *
         * @throws \BadMethodCallException
         */
        public function emogrify()
        {
        }
        /**
         * Applies $this->css to $this->html and returns only the HTML content
         * within the <body> tag.
         *
         * This method places the CSS inline.
         *
         * @return string
         *
         * @throws \BadMethodCallException
         */
        public function emogrifyBodyContent()
        {
        }
        /**
         * Applies $this->css to $xmlDocument.
         *
         * This method places the CSS inline.
         *
         * @param \DOMDocument $xmlDocument
         *
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        protected function process(\DOMDocument $xmlDocument)
        {
        }
        /**
         * Disables the parsing of inline styles.
         *
         * @return void
         */
        public function disableInlineStyleAttributesParsing()
        {
        }
        /**
         * Disables the parsing of <style> blocks.
         *
         * @return void
         */
        public function disableStyleBlocksParsing()
        {
        }
        /**
         * Disables the removal of elements with `display: none` properties.
         *
         * @return void
         */
        public function disableInvisibleNodeRemoval()
        {
        }
        /**
         * Enables the attachment/override of HTML attributes for which a
         * corresponding CSS property has been set.
         *
         * @return void
         */
        public function enableCssToHtmlMapping()
        {
        }
        /**
         * Marks a tag for removal.
         *
         * There are some HTML tags that DOMDocument cannot process, and it will throw an error if it encounters them.
         * In particular, DOMDocument will complain if you try to use HTML5 tags in an XHTML document.
         *
         * Note: The tags will not be removed if they have any content.
         *
         * @param string $tagName the tag name, e.g., "p"
         *
         * @return void
         */
        public function addUnprocessableHtmlTag($tagName)
        {
        }
        /**
         * Drops a tag from the removal list.
         *
         * @param string $tagName the tag name, e.g., "p"
         *
         * @return void
         */
        public function removeUnprocessableHtmlTag($tagName)
        {
        }
        /**
         * Marks a media query type to keep.
         *
         * @param string $mediaName the media type name, e.g., "braille"
         *
         * @return void
         */
        public function addAllowedMediaType($mediaName)
        {
        }
        /**
         * Drops a media query type from the allowed list.
         *
         * @param string $mediaName the tag name, e.g., "braille"
         *
         * @return void
         */
        public function removeAllowedMediaType($mediaName)
        {
        }
        /**
         * Adds a selector to exclude nodes from emogrification.
         *
         * Any nodes that match the selector will not have their style altered.
         *
         * @param string $selector the selector to exclude, e.g., ".editor"
         *
         * @return void
         */
        public function addExcludedSelector($selector)
        {
        }
        /**
         * No longer excludes the nodes matching this selector from emogrification.
         *
         * @param string $selector the selector to no longer exclude, e.g., ".editor"
         *
         * @return void
         */
        public function removeExcludedSelector($selector)
        {
        }
        /**
         * Adds a style element with $css to $document.
         *
         * This method is protected to allow overriding.
         *
         * @see https://github.com/jjriv/emogrifier/issues/103
         *
         * @param \DOMDocument $document
         * @param string $css
         *
         * @return void
         */
        protected function addStyleElementToDocument(\DOMDocument $document, $css)
        {
        }
        /**
         * Handles invalid xPath expression warnings, generated during the process() method,
         * during querying \DOMDocument and trigger \InvalidArgumentException with invalid selector
         * or \RuntimeException, depending on the source of the warning.
         *
         * @param int $type
         * @param string $message
         * @param string $file
         * @param int $line
         * @param array $context
         *
         * @return bool always false
         *
         * @throws \InvalidArgumentException
         * @throws \RuntimeException
         */
        public function handleXpathQueryWarnings(
            // @codingStandardsIgnoreLine
            $type,
            $message,
            $file,
            $line,
            array $context
        ) {
        }
        /**
         * Sets the debug mode.
         *
         * @param bool $debug set to true to enable debug mode
         *
         * @return void
         */
        public function setDebug($debug)
        {
        }
    }
}

namespace FluentForm\App\Services {
    class ConditionAssesor
    {
        public static function evaluate(&$field, &$inputs)
        {
        }
        public static function assess(&$conditional, &$inputs)
        {
        }
    }
}

namespace FluentForm\App\Services\Parser {
    class Extractor
    {
        /**
         * The form field settings.
         *
         * @var array
         */
        protected $fields;
        /**
         * The properties that need to be extracted.
         *
         * @var array
         */
        protected $with;
        /**
         * The supported form input types defined for Fluent Forms.
         *
         * @var array
         */
        protected $inputTypes;
        /**
         * The extracted result.
         *
         * @var array
         */
        protected $result = [];
        /**
         * The current form field that's being set when we loop
         * through all the form fields in the looper method.
         *
         * @var array
         */
        protected $field = [];
        /**
         * The current field attribute that's being set when we loop
         * through all the form fields in the looper method.
         *
         * @var string
         */
        protected $attribute;
        /**
         * Extractor constructor.
         *
         * @param array $fields
         * @param array $with
         * @param array $inputTypes
         */
        public function __construct($fields, $with, $inputTypes)
        {
        }
        /**
         * The extractor initializer for getting the extracted data.
         *
         * @return array
         */
        public function extract()
        {
        }
        /**
         * The recursive looper method to loop each
         * of the fields and extract it's data.
         *
         * @param array $fields
         */
        protected function looper($fields = [])
        {
        }
        /**
         * Extract the form field.
         *
         * @param  array $field
         * @return $this
         */
        protected function extractField($field)
        {
        }
        /**
         * Set the field and attribute of the current iteration when
         * we loop through the form fields using the looper method.
         *
         * @param  array  $field
         * @param  string $attribute
         * @return $this
         */
        protected function prepareIteration($field, $attribute)
        {
        }
        /**
         * Set the element of the form field.
         *
         * @param  array  $field
         * @param  string $attributeName
         * @return $this
         */
        protected function setElement()
        {
        }
        /**
         * Set the label of the form field.
         *
         * @return $this
         */
        protected function setLabel()
        {
        }
        /**
         * Set the admin label of the form field.
         *
         * @return $this
         */
        protected function setAdminLabel()
        {
        }
        /**
         * Set the options of the form field.
         *
         * @return $this
         */
        protected function setOptions()
        {
        }
        /**
         * Set the advanced options of the form field.
         *
         * @return $this
         */
        protected function setAdvancedOptions()
        {
        }
        protected function setSettings()
        {
        }
        /**
         * Set the attributes of the form field.
         *
         * @return $this
         */
        protected function setAttributes()
        {
        }
        /**
         * Set the validation rules and conditions of the form field.
         *
         * @return $this
         */
        protected function setValidations()
        {
        }
        /**
         * Handle the child fields of the custom field.
         *
         * @return $this
         */
        protected function handleCustomField()
        {
        }
        /**
         * Set the raw field of the form field.
         *
         * @return $this
         */
        protected function setRaw()
        {
        }
    }
    class Validations
    {
        /**
         * Form fields that were defined when the form was created.
         *
         * @var array
         */
        protected $fields;
        /**
         * Form inputs that were submited by the user.
         *
         * @var array
         */
        protected $inputs;
        /**
         * The current field accessor of the fields' iteration.
         *
         * @var string
         */
        protected $accessor;
        /**
         * The repeater field settings. It is being set if the
         * field in iteration is indeed a repeater field.
         *
         * @var array
         */
        protected $repeater = ['status' => false, 'attribute' => '', 'length' => 0, 'rule' => ''];
        /**
         * The extracted validation rules.
         *
         * @var array
         */
        protected $rules = [];
        /**
         * The extracted validation messages.
         *
         * @var array
         */
        protected $messages = [];
        /**
         * The validation extractor constructor.
         *
         * @param array $formFields
         * @param array $formData
         */
        public function __construct($formFields = [], $formData = [])
        {
        }
        /**
         * Get the extracted validation rules and messages.
         *
         * @return array
         */
        public function get()
        {
        }
        /**
         * Set the field accessor by replacing the `[]`, `*` by `.`
         * so that dot notation can be used to access the inputs.
         *
         * @param  string $fieldName
         * @return $this
         */
        protected function setFieldAccessor($fieldName)
        {
        }
        /**
         * Determines if the field is applicable for extracting validations.
         *
         * @param  array   $field
         * @return boolean
         */
        protected function isApplicable($field)
        {
        }
        /**
         * Get the field value from the form data.
         *
         * @return mixed
         */
        protected function getFieldValue()
        {
        }
        /**
         * Set the repeater settings if the field in
         * iteration is indeed a repeater field.
         *
         * @param  string $fieldName
         * @param  array  $field
         * @return $this
         */
        protected function setRepeater($fieldName, $field)
        {
        }
        /**
         * Determines if the iteration should skip this rule or not.
         *
         * @param  array   $rule
         * @return boolean
         */
        protected function shouldNotSkipThisRule($rule, $fieldValue, $hasRequiredRule)
        {
        }
        /**
         * Prepare the validation extraction.
         *
         * @param string $fieldName
         * @param string $ruleName
         * @param array  $rule
         */
        protected function prepareValidations($fieldName, $ruleName, $rule)
        {
        }
        /**
         * Set the validation rules & messages
         *
         * @param string $fieldName
         * @param string $ruleName
         * @param array  $rule
         * @param string $logic
         */
        protected function setValidations($fieldName, $ruleName, $rule, $logic)
        {
        }
        /**
         * Get the logic name for the current rule.
         *
         * @param  string $ruleName
         * @param  array  $rule
         * @return string
         */
        protected function getLogic($ruleName, $rule)
        {
        }
    }
    class Form
    {
        /**
         * @var \stdClass $form
         */
        protected $form;
        /**
         * @var array $inputTypes
         */
        protected $inputTypes;
        /**
         * The parsed form fields.
         *
         * @var array
         */
        protected $parsed;
        /**
         * The parsed validations
         *
         * @var array
         */
        protected $validations;
        /**
         * Form Parser constructor.
         *
         * @param \stdClass $form
         */
        public function __construct($form)
        {
        }
        /**
         * Set input types of the form.
         *
         * @param array $types
         * @return \FluentForm\App\Services\Parser\Form $this
         */
        public function setInputTypes($types = [])
        {
        }
        /**
         * Get form fields.
         *
         * @param boolean $asArray
         * @return array
         */
        public function getFields($asArray = false)
        {
        }
        /**
         * Get flatten form inputs. Flatten implies that all
         * of the form fields will be in a simple array.
         *
         * @param array $with
         * @return array
         */
        public function getInputs($with = [])
        {
        }
        /**
         * Get the inputs just as they setup in the form editor.
         * e.g. `names` as `names` not with the child fields.
         *
         * @param array $with
         * @return array
         */
        public function getEntryInputs($with = ['admin_label'])
        {
        }
        /**
         * Get the flatten inputs as the result of the `getInputs`
         * method but replace the keys those have `[]` with `.`
         * And also remove the repeat fields' child fields.
         *
         * @param array $with
         * @param array
         */
        public function getShortCodeInputs($with = ['admin_label'])
        {
        }
        /**
         * Get admin labels of the form fields.
         *
         * @param array $fields
         * @return array
         */
        public function getAdminLabels($fields = [])
        {
        }
        /**
         * Get admin labels of the form fields.
         *
         * @param array $inputs
         * @param array $fields
         * @return array
         */
        public function getValidations($inputs, $fields = [])
        {
        }
        /**
         * Get an element by it's name.
         *
         * @param string|array $name
         * @param array $with
         * @return array
         */
        public function getElement($name, $with = [])
        {
        }
        /**
         * Determine whether the form has an element.
         *
         * @param string $name
         * @return bool
         */
        public function hasElement($name)
        {
        }
        /**
         * Determine whether the form has any required fields.
         *
         * @param array $fields
         * @return bool
         */
        public function hasRequiredFields($fields = [])
        {
        }
        /**
         * Get Payment Related Fields
         *
         * @param array $with array
         * @return array
         */
        public function getPaymentFields($with = ['element'])
        {
        }
        /**
         * Get Payment Input Fields
         *
         * @return array
         */
        public function getPaymentInputFields($with = ['element'])
        {
        }
        /**
         * Determine whether the form has payment elements
         *
         * @return bool
         */
        public function hasPaymentFields()
        {
        }
        /**
         * Get an specific field for an element type.
         *
         * @param $element
         * @param $attribute
         * @param array $with
         * @return array|null
         */
        public function getField($element, $attribute, $with = [])
        {
        }
        /**
         * Get Payment Input Fields
         *
         * @return array
         */
        public function getAttachmentInputFields($with = ['element'])
        {
        }
        /**
         * Get Any Field Type
         * @return array
         */
        public function getInputsByElementTypes($types, $with = ['element'])
        {
        }
        /**
         * Get Address Fields
         *
         * @return array
         */
        public function getAddressFields($with = ['admin_label', 'attributes'])
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder {
    class EditorShortCode
    {
        public static function getGeneralShortCodes()
        {
        }
        public static function getFormShortCodes($form)
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
        public static function parse($string, $data, callable $arrayFormatter = null)
        {
        }
        public static function parseArray($string, $data, $arrayFormatter)
        {
        }
        public static function parseString($string, $data, callable $arrayFormatter = null)
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
         * @param string $value
         * @return string
         */
        public static function filter($value, $form)
        {
        }
        /**
         * Parse the curly braced shortcode into array
         * @param string $value
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
         * @return string
         */
        public static function parseQueryParam($value)
        {
        }
        /**
         * Generate random a string with prefix
         *
         * @param $value
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
        protected static $store = ['inputs' => null, 'original_inputs' => null, 'user' => null, 'post' => null, 'other' => null, 'submission' => null];
        public static function parse($parsable, $entryId, $data = [], $form = null, $isUrl = false, $providerOrIsHTML = false)
        {
        }
        protected static function setDependencies($entry, $data, $form)
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
        protected static function parseShortCodeFromArray($parsable, $isUrl = false, $provider = false)
        {
        }
        protected static function parseShortCodeFromString($parsable, $isUrl = false, $isHtml = false)
        {
        }
        protected static function getFormData($key, $isHtml = false)
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
        public static function resetData()
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder\Components {
    class SectionBreak extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class DateTime extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
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
         * @var integer
         */
        protected $maxColumns = 12;
        /**
         * Container column class
         * @var string
         */
        protected $columnClass = 'ff-t-cell';
        /**
         * Container wrapper class
         * @var string
         */
        protected $wrapperClass = 'ff-t-container ff-column-container';
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Recaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class SubmitButton extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param array $data [element data]
         * @param stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Address extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Wrapper class for address element
         * @var string
         */
        protected $wrapperClass = 'fluent-address';
        /**
         * Compile and echo the html element
         * @param array $data [element data]
         * @param stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class CustomHtml extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Hcaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class SelectCountry extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param array $data [element data]
         * @param stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
        /**
         * Load countt list from file
         * @param array $data
         * @return array
         */
        public function loadCountries($data)
        {
        }
        /**
         * Build options for country list/select
         * @param array $options
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
        function getComponent()
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
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class TextArea extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array     $data [element data]
         * @param  \stdClass $form [Form Object]
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
         * @param array $data [element data]
         * @param stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
        /**
         * Build options for select
         * @param array $options
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
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
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
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class TabularGrid extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
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
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class TermsAndConditions extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Text extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder {
    class NotificationParser
    {
        protected static $cache = null;
        /**
         * Parse Norifications
         * @param array $notifications
         * @param int $insertId
         * @param array $data
         * @param object $form
         * @return  bool $cache
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
         * @var array
         */
        protected $items = array();
        /**
         * Build the object instance
         * @param array $items
         */
        public function __construct(array $items)
        {
        }
        /**
         * Add a component into list [$items]
         * @param string $name
         * @param array  $component
         * @param string $group ['general'|'advanced']
         * @return $this
         */
        public function add($name, array $component, $group)
        {
        }
        /**
         * Remove a component from the list [$items]
         * @param  string $name
         * @param  string $group ['general'|'advanced']
         * @return $this
         */
        public function remove($name, $group)
        {
        }
        /**
         * Modify an existing component
         * @param  string $name
         * @param  Closure $callback [to modify the component within]
         * @param  string $group
         * @return $this
         */
        public function update($name, \Closure $callback, $group)
        {
        }
        /**
         * Sort the components in list [$items]
         * @param  string $sortBy [key to sort by]
         * @return $this
         */
        public function sort($sortBy = 'index')
        {
        }
        /**
         * Return array [$items]
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Return array [$items]
         * @return array
         */
        public function jsonSerialize()
        {
        }
        /**
         * Getter to hook proxy call
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
         * @var string
         */
        protected $group = null;
        /**
         * @var \FluentForm\App\Services\FormBuilder\Components
         */
        protected $collection = null;
        public function __construct($collection, $group)
        {
        }
        /**
         * Dynamic call method
         * @param  string $method
         * @param  array $params
         * @return \FluentForm\App\Services\FormBuilder\Components
         */
        public function __call($method, $params)
        {
        }
    }
}

namespace FluentForm\App\Services\FormBuilder\Notifications {
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
         * @var $app
         */
        protected $app = null;
        /**
         * Biuld the instance of this class
         * @param \FluentForm\Framework\Foundation\Application $app
         * @return $this
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Send the email notification
         * @param array $notification [Notification settings from form meta]
         * @param array $submittedData [User submitted form data]
         * @param \StdClass $form [The form object from database]
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
}

namespace FluentForm\App\Services\FormBuilder {
    class FormBuilder
    {
        /**
         * The Applivcation instance
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app = null;
        protected $form = null;
        /**
         * Conditional logic for elements
         * @var array
         */
        public $conditions = array();
        /**
         * Validation rules for elements
         * @var array
         */
        public $validationRules = array();
        public $tabIndex = 1;
        public $fieldLists = [];
        public $containerCounter;
        /**
         * Construct the form builder instance
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct($app)
        {
        }
        /**
         * Render the form
         * @param  \StdClass $form [Form entry from database]
         * @return mixed
         */
        public function build($form, $extraCssClass = '', $instanceCssClass = '', $atts = [])
        {
        }
        public function buildFormBody($form)
        {
        }
        /**
         * Set unique name/data-name for an element
         * @param array &$item
         * @return  void
         */
        protected function setUniqueIdentifier(&$item)
        {
        }
        /**
         * Recursively extract validation rules from a given element
         * @param array $item
         * @return void
         */
        protected function extractValidationRules($item)
        {
        }
        /**
         * Extract validation rules from a given element
         * @param array $item
         * @return void
         */
        protected function extractValidationRule($item)
        {
        }
        /**
         * Extract conditipnal logic from a given element
         * @param array $item
         * @return void
         */
        protected function extractConditionalLogic($item)
        {
        }
        /**
         * Build attributes for any html element
         * @param  array  $attributes
         * @return string [Compiled key='value' attributes]
         */
        protected function buildAttributes($attributes, $form = null)
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations {
    class GlobalNotificationManager
    {
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function globalNotify($insertId, $formData, $form)
        {
        }
        public function checkCondition($parsedValue, $formData, $insertId)
        {
        }
        public function getEntry($id, $form)
        {
        }
        public function cleanUpPassword($entryId, $form)
        {
        }
        /**
         * @param $feeds
         * @param $formData
         * @param $insertId
         * @return array
         */
        public function getEnabledFeeds($feeds, $formData, $insertId)
        {
        }
    }
    class GlobalIntegrationManager
    {
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function getGlobalSettingsAjax()
        {
        }
        public function saveGlobalSettingsAjax()
        {
        }
        public function getAllFormIntegrations()
        {
        }
        public function getNotificationFeeds($formId)
        {
        }
        public function updateNotificationStatus()
        {
        }
        public function getIntegrationSettings()
        {
        }
        public function saveIntegrationSettings()
        {
        }
        public function deleteIntegrationFeed()
        {
        }
        public function getIntegrationList()
        {
        }
    }
    trait LogResponseTrait
    {
        protected function logResponse($response, $feed, $data, $form, $entryId, $status)
        {
        }
        protected function getApiResponseMessage($response, $status)
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations\MailChimp {
    trait MailChimpSubscriber
    {
        use \FluentForm\App\Services\Integrations\LogResponseTrait;
        /**
         * Enabled MailChimp feed settings.
         *
         * @var array $feeds
         */
        protected $feeds = [];
        /**
         * Required for api response logging
         * @var string
         */
        protected $metaKey = 'fluentform_mailchimp_feed';
        /**
         * Form input data.
         *
         * @param array $formData
         */
        public function setApplicableFeeds($formData)
        {
        }
        /**
         * Determine if the feed is eligible to be applied.
         *
         * @param $feed
         * @param $formData
         *
         * @return bool
         */
        public function isApplicable(&$feed, &$formData)
        {
        }
        /**
         * Subscribe a user to the list on form submission.
         *
         * @param $feed
         * @param $formData
         * @param $entry
         * @param $form
         * @return array|bool|false
         * @throws \Exception
         */
        public function subscribe($feed, $formData, $entry, $form)
        {
        }
        /**
         * Get a specific MailChimp list member.
         *
         */
        public function getMemberByEmail($list_id, $email_address)
        {
        }
    }
    /**
     * Super-simple, minimum abstraction MailChimp API v3 wrapper
     * MailChimp API v3: http://developer.mailchimp.com
     * This wrapper: https://github.com/drewm/mailchimp-api
     *
     * @author Drew McLellan <drew.mclellan@gmail.com>
     * @version 2.4
     */
    class MailChimp
    {
        const TIMEOUT = 10;
        /*  SSL Verification
                Read before disabling:
                http://snippets.webaware.com.au/howto/stop-turning-off-curlopt_ssl_verifypeer-and-fix-your-php-config/
            */
        public $verify_ssl = true;
        /**
         * Create a new instance
         * @param string $api_key Your MailChimp API key
         * @param string $api_endpoint Optional custom API endpoint
         * @throws \Exception
         */
        public function __construct($api_key, $api_endpoint = null)
        {
        }
        /**
         * @return string The url to the API endpoint
         */
        public function getApiEndpoint()
        {
        }
        /**
         * Convert an email address into a 'subscriber hash' for identifying the subscriber in a method URL
         * @param   string $email The subscriber's email address
         * @return  string          Hashed version of the input
         */
        public function subscriberHash($email)
        {
        }
        /**
         * Was the last request successful?
         * @return bool  True for success, false for failure
         */
        public function success()
        {
        }
        /**
         * Get the last error returned by either the network transport, or by the API.
         * If something didn't work, this should contain the string describing the problem.
         * @return  string|false  describing the error
         */
        public function getLastError()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API response.
         * @return array  Assoc array with keys 'headers' and 'body'
         */
        public function getLastResponse()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API request.
         * @return array  Assoc array
         */
        public function getLastRequest()
        {
        }
        /**
         * Make an HTTP DELETE request - for deleting data
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (if any)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function delete($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP GET request - for retrieving data
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function get($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PATCH request - for performing partial updates
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function patch($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP POST request - for creating and updating items
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function post($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PUT request - for creating new items
         * @param string $method URL of the API request method
         * @param array $args Assoc array of arguments (usually your data)
         * @param int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         * @throws \Exception
         */
        public function put($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations {
    abstract class IntegrationManager
    {
        protected $app = null;
        protected $subscriber = null;
        protected $title = '';
        protected $description = '';
        protected $integrationKey = '';
        protected $optionKey = '';
        protected $settingsKey = '';
        protected $priority = 11;
        public $logo = '';
        public $hasGlobalMenu = true;
        public $category = 'crm';
        public $disableGlobalSettings = 'no';
        public function __construct($app, $title, $integrationKey, $optionKey, $settingsKey, $priority = 11)
        {
        }
        public function registerAdminHooks()
        {
        }
        public function registerNotificationHooks()
        {
        }
        public function notify($feed, $formData, $entry, $form)
        {
        }
        public function addGlobalMenu($setting)
        {
        }
        public function addNotificationType($types)
        {
        }
        public function addActiveNotificationType($types)
        {
        }
        public function getGlobalSettings($settings)
        {
        }
        public function saveGlobalSettings($settings)
        {
        }
        public function getGlobalFields($fields)
        {
        }
        public function setMetaKey($data, $integrationId)
        {
        }
        public function prepareIntegrationFeed($setting, $feed, $formId)
        {
        }
        public abstract function getIntegrationDefaults($settings, $formId);
        public abstract function pushIntegration($integrations, $formId);
        public abstract function getSettingsFields($settings, $formId);
        public abstract function getMergeFields($list, $listId, $formId);
        public function setFeedAtributes($feed, $formId)
        {
        }
        public function isConfigured()
        {
        }
        public function isEnabled()
        {
        }
        public function getApiSettings()
        {
        }
        protected function getSelectedTagIds($data, $inputData, $simpleKey = 'tag_ids', $routingId = 'tag_ids_selection_type', $routersKey = 'tag_routers')
        {
        }
        protected function evaluateRoutings($routings, $inputData)
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations\MailChimp {
    class MailChimpIntegration extends \FluentForm\App\Services\Integrations\IntegrationManager
    {
        /**
         * MailChimp Subscriber that handles & process all the subscribing logics.
         */
        use \FluentForm\App\Services\Integrations\MailChimp\MailChimpSubscriber;
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function getGlobalFields($fields)
        {
        }
        public function getGlobalSettings($settings)
        {
        }
        public function saveGlobalSettings($mailChimp)
        {
        }
        public function pushIntegration($integrations, $formId)
        {
        }
        public function getIntegrationDefaults($settings, $formId)
        {
        }
        public function getSettingsFields($settings, $formId)
        {
        }
        public function setFeedAtributes($feed, $formId)
        {
        }
        public function prepareIntegrationFeed($setting, $feed, $formId)
        {
        }
        public function getMergeFields($list, $listId, $formId)
        {
        }
        public function findMergeFields($listId)
        {
        }
        public function fetchInterestGroups()
        {
        }
        public function sanitizeSettings($integration, $integrationId, $formId)
        {
        }
        /*
         * For Handling Notifications broadcast
         */
        public function notify($feed, $formData, $entry, $form)
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations {
    class BaseIntegration
    {
        public function __construct($settings_key = '', $form_id = false, $isMultiple = false)
        {
        }
        public function setSettingsKey($key)
        {
        }
        public function setIsMultiple($isMultiple)
        {
        }
        public function setFormId($formId)
        {
        }
        public function setJasonType($type)
        {
        }
        public function save($settings)
        {
        }
        public function update($settingsId, $settings)
        {
        }
        public function get($settingsId)
        {
        }
        public function getAll()
        {
        }
        public function delete($settingsId)
        {
        }
        protected function validate($notification)
        {
        }
        public function deleteAll()
        {
        }
    }
}

namespace FluentForm\App\Services\Integrations\Slack {
    class SlackNotificationActions
    {
        protected $app = null;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function register()
        {
        }
        public function notify($feed, $formData, $entry, $form)
        {
        }
    }
    class Slack
    {
        use \FluentForm\App\Services\Integrations\LogResponseTrait;
        /**
         * The slack integration settings of the form.
         *
         * @var array $settings
         */
        protected $settings = [];
        /**
         * Handle slack notifier.
         *
         * @param $submissionId
         * @param $formData
         * @param $form
         */
        public static function handle($feed, $formData, $form, $entry)
        {
        }
        // @todo make helper function for formatting in MarkDown Format
        // make tabular-grid value markdown format
        protected static function getTabularGridMarkdownValue($girdData, $field = [], $rowJoiner = '<br />', $colJoiner = ', ')
        {
        }
    }
}

namespace FluentForm\App\Services\Browser {
    /**
     * File: Browser.php
     * Author: Chris Schuld (http://chrisschuld.com/)
     * Last Modified: July 22nd, 2016
     * @version 2.0
     * @package PegasusPHP
     *
     * Copyright (C) 2008-2010 Chris Schuld  (chris@chrisschuld.com)
     *
     * This program is free software; you can redistribute it and/or
     * modify it under the terms of the GNU General Public License as
     * published by the Free Software Foundation; either version 2 of
     * the License, or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details at:
     * http://www.gnu.org/copyleft/gpl.html
     *
     *
     * Typical Usage:
     *
     *   $browser = new Browser();
     *   if( $browser->getBrowser() == Browser::BROWSER_FIREFOX && $browser->getVersion() >= 2 ) {
     *    echo 'You have FireFox version 2 or greater';
     *   }
     *
     * User Agents Sampled from: http://www.useragentstring.com/
     *
     * This implementation is based on the original work from Gary White
     * http://apptools.com/phptools/browser/
     *
     */
    class Browser
    {
        const BROWSER_UNKNOWN = 'unknown';
        const VERSION_UNKNOWN = 'unknown';
        const BROWSER_OPERA = 'Opera';
        // http://www.opera.com/
        const BROWSER_OPERA_MINI = 'Opera Mini';
        // http://www.opera.com/mini/
        const BROWSER_WEBTV = 'WebTV';
        // http://www.webtv.net/pc/
        const BROWSER_EDGE = 'Edge';
        // https://www.microsoft.com/edge
        const BROWSER_IE = 'Internet Explorer';
        // http://www.microsoft.com/ie/
        const BROWSER_POCKET_IE = 'Pocket Internet Explorer';
        // http://en.wikipedia.org/wiki/Internet_Explorer_Mobile
        const BROWSER_KONQUEROR = 'Konqueror';
        // http://www.konqueror.org/
        const BROWSER_ICAB = 'iCab';
        // http://www.icab.de/
        const BROWSER_OMNIWEB = 'OmniWeb';
        // http://www.omnigroup.com/applications/omniweb/
        const BROWSER_FIREBIRD = 'Firebird';
        // http://www.ibphoenix.com/
        const BROWSER_FIREFOX = 'Firefox';
        // http://www.mozilla.com/en-US/firefox/firefox.html
        const BROWSER_ICEWEASEL = 'Iceweasel';
        // http://www.geticeweasel.org/
        const BROWSER_SHIRETOKO = 'Shiretoko';
        // http://wiki.mozilla.org/Projects/shiretoko
        const BROWSER_MOZILLA = 'Mozilla';
        // http://www.mozilla.com/en-US/
        const BROWSER_AMAYA = 'Amaya';
        // http://www.w3.org/Amaya/
        const BROWSER_LYNX = 'Lynx';
        // http://en.wikipedia.org/wiki/Lynx
        const BROWSER_SAFARI = 'Safari';
        // http://apple.com
        const BROWSER_IPHONE = 'iPhone';
        // http://apple.com
        const BROWSER_IPOD = 'iPod';
        // http://apple.com
        const BROWSER_IPAD = 'iPad';
        // http://apple.com
        const BROWSER_CHROME = 'Chrome';
        // http://www.google.com/chrome
        const BROWSER_ANDROID = 'Android';
        // http://www.android.com/
        const BROWSER_GOOGLEBOT = 'GoogleBot';
        // http://en.wikipedia.org/wiki/Googlebot
        const BROWSER_YANDEXBOT = 'YandexBot';
        // http://yandex.com/bots
        const BROWSER_YANDEXIMAGERESIZER_BOT = 'YandexImageResizer';
        // http://yandex.com/bots
        const BROWSER_YANDEXIMAGES_BOT = 'YandexImages';
        // http://yandex.com/bots
        const BROWSER_YANDEXVIDEO_BOT = 'YandexVideo';
        // http://yandex.com/bots
        const BROWSER_YANDEXMEDIA_BOT = 'YandexMedia';
        // http://yandex.com/bots
        const BROWSER_YANDEXBLOGS_BOT = 'YandexBlogs';
        // http://yandex.com/bots
        const BROWSER_YANDEXFAVICONS_BOT = 'YandexFavicons';
        // http://yandex.com/bots
        const BROWSER_YANDEXWEBMASTER_BOT = 'YandexWebmaster';
        // http://yandex.com/bots
        const BROWSER_YANDEXDIRECT_BOT = 'YandexDirect';
        // http://yandex.com/bots
        const BROWSER_YANDEXMETRIKA_BOT = 'YandexMetrika';
        // http://yandex.com/bots
        const BROWSER_YANDEXNEWS_BOT = 'YandexNews';
        // http://yandex.com/bots
        const BROWSER_YANDEXCATALOG_BOT = 'YandexCatalog';
        // http://yandex.com/bots
        const BROWSER_SLURP = 'Yahoo! Slurp';
        // http://en.wikipedia.org/wiki/Yahoo!_Slurp
        const BROWSER_W3CVALIDATOR = 'W3C Validator';
        // http://validator.w3.org/
        const BROWSER_BLACKBERRY = 'BlackBerry';
        // http://www.blackberry.com/
        const BROWSER_ICECAT = 'IceCat';
        // http://en.wikipedia.org/wiki/GNU_IceCat
        const BROWSER_NOKIA_S60 = 'Nokia S60 OSS Browser';
        // http://en.wikipedia.org/wiki/Web_Browser_for_S60
        const BROWSER_NOKIA = 'Nokia Browser';
        // * all other WAP-based browsers on the Nokia Platform
        const BROWSER_MSN = 'MSN Browser';
        // http://explorer.msn.com/
        const BROWSER_MSNBOT = 'MSN Bot';
        // http://search.msn.com/msnbot.htm
        const BROWSER_BINGBOT = 'Bing Bot';
        // http://en.wikipedia.org/wiki/Bingbot
        const BROWSER_VIVALDI = 'Vivalidi';
        // https://vivaldi.com/
        const BROWSER_YANDEX = 'Yandex';
        // https://browser.yandex.ua/
        const BROWSER_NETSCAPE_NAVIGATOR = 'Netscape Navigator';
        // http://browser.netscape.com/ (DEPRECATED)
        const BROWSER_GALEON = 'Galeon';
        // http://galeon.sourceforge.net/ (DEPRECATED)
        const BROWSER_NETPOSITIVE = 'NetPositive';
        // http://en.wikipedia.org/wiki/NetPositive (DEPRECATED)
        const BROWSER_PHOENIX = 'Phoenix';
        // http://en.wikipedia.org/wiki/History_of_Mozilla_Firefox (DEPRECATED)
        const BROWSER_PLAYSTATION = "PlayStation";
        const BROWSER_SAMSUNG = "SamsungBrowser";
        const BROWSER_SILK = "Silk";
        const BROWSER_I_FRAME = "Iframely";
        const BROWSER_COCOA = "CocoaRestClient";
        const PLATFORM_UNKNOWN = 'unknown';
        const PLATFORM_WINDOWS = 'Windows';
        const PLATFORM_WINDOWS_CE = 'Windows CE';
        const PLATFORM_APPLE = 'Apple';
        const PLATFORM_LINUX = 'Linux';
        const PLATFORM_OS2 = 'OS/2';
        const PLATFORM_BEOS = 'BeOS';
        const PLATFORM_IPHONE = 'iPhone';
        const PLATFORM_IPOD = 'iPod';
        const PLATFORM_IPAD = 'iPad';
        const PLATFORM_BLACKBERRY = 'BlackBerry';
        const PLATFORM_NOKIA = 'Nokia';
        const PLATFORM_FREEBSD = 'FreeBSD';
        const PLATFORM_OPENBSD = 'OpenBSD';
        const PLATFORM_NETBSD = 'NetBSD';
        const PLATFORM_SUNOS = 'SunOS';
        const PLATFORM_OPENSOLARIS = 'OpenSolaris';
        const PLATFORM_ANDROID = 'Android';
        const PLATFORM_PLAYSTATION = "Sony PlayStation";
        const PLATFORM_ROKU = "Roku";
        const PLATFORM_APPLE_TV = "Apple TV";
        const PLATFORM_TERMINAL = "Terminal";
        const PLATFORM_FIRE_OS = "Fire OS";
        const PLATFORM_SMART_TV = "SMART-TV";
        const PLATFORM_CHROME_OS = "Chrome OS";
        const PLATFORM_JAVA_ANDROID = "Java/Android";
        const PLATFORM_POSTMAN = "Postman";
        const PLATFORM_I_FRAME = "Iframely";
        const OPERATING_SYSTEM_UNKNOWN = 'unknown';
        /**
         * Class constructor
         */
        public function __construct($userAgent = "")
        {
        }
        /**
         * Reset all properties
         */
        public function reset()
        {
        }
        /**
         * Check to see if the specific browser is valid
         * @param string $browserName
         * @return bool True if the browser is the specified browser
         */
        function isBrowser($browserName)
        {
        }
        /**
         * The name of the browser.  All return types are from the class contants
         * @return string Name of the browser
         */
        public function getBrowser()
        {
        }
        /**
         * Set the name of the browser
         * @param $browser string The name of the Browser
         */
        public function setBrowser($browser)
        {
        }
        /**
         * The name of the platform.  All return types are from the class contants
         * @return string Name of the browser
         */
        public function getPlatform()
        {
        }
        /**
         * Set the name of the platform
         * @param string $platform The name of the Platform
         */
        public function setPlatform($platform)
        {
        }
        /**
         * The version of the browser.
         * @return string Version of the browser (will only contain alpha-numeric characters and a period)
         */
        public function getVersion()
        {
        }
        /**
         * Set the version of the browser
         * @param string $version The version of the Browser
         */
        public function setVersion($version)
        {
        }
        /**
         * The version of AOL.
         * @return string Version of AOL (will only contain alpha-numeric characters and a period)
         */
        public function getAolVersion()
        {
        }
        /**
         * Set the version of AOL
         * @param string $version The version of AOL
         */
        public function setAolVersion($version)
        {
        }
        /**
         * Is the browser from AOL?
         * @return boolean True if the browser is from AOL otherwise false
         */
        public function isAol()
        {
        }
        /**
         * Is the browser from a mobile device?
         * @return boolean True if the browser is from a mobile device otherwise false
         */
        public function isMobile()
        {
        }
        /**
         * Is the browser from a tablet device?
         * @return boolean True if the browser is from a tablet device otherwise false
         */
        public function isTablet()
        {
        }
        /**
         * Is the browser from a robot (ex Slurp,GoogleBot)?
         * @return boolean True if the browser is from a robot otherwise false
         */
        public function isRobot()
        {
        }
        /**
         * Is the browser from facebook?
         * @return boolean True if the browser is from facebook otherwise false
         */
        public function isFacebook()
        {
        }
        /**
         * Set the browser to be from AOL
         * @param $isAol
         */
        public function setAol($isAol)
        {
        }
        /**
         * Set the Browser to be mobile
         * @param boolean $value is the browser a mobile browser or not
         */
        protected function setMobile($value = true)
        {
        }
        /**
         * Set the Browser to be tablet
         * @param boolean $value is the browser a tablet browser or not
         */
        protected function setTablet($value = true)
        {
        }
        /**
         * Set the Browser to be a robot
         * @param boolean $value is the browser a robot or not
         */
        protected function setRobot($value = true)
        {
        }
        /**
         * Set the Browser to be a Facebook request
         * @param boolean $value is the browser a robot or not
         */
        protected function setFacebook($value = true)
        {
        }
        /**
         * Get the user agent value in use to determine the browser
         * @return string The user agent from the HTTP header
         */
        public function getUserAgent()
        {
        }
        /**
         * Set the user agent value (the construction will use the HTTP header value - this will overwrite it)
         * @param string $agent_string The value for the User Agent
         */
        public function setUserAgent($agent_string)
        {
        }
        /**
         * Used to determine if the browser is actually "chromeframe"
         * @since 1.7
         * @return boolean True if the browser is using chromeframe
         */
        public function isChromeFrame()
        {
        }
        /**
         * Returns a formatted string with a summary of the details of the browser.
         * @return string formatted string with a summary of the browser
         */
        public function __toString()
        {
        }
        /**
         * Protected routine to calculate and determine what the browser is in use (including platform)
         */
        protected function determine()
        {
        }
        /**
         * Protected routine to determine the browser type
         * @return boolean True if the browser was detected otherwise false
         */
        protected function checkBrowsers()
        {
        }
        /**
         * Determine if the user is using a BlackBerry (last updated 1.7)
         * @return boolean True if the browser is the BlackBerry browser otherwise false
         */
        protected function checkBrowserBlackBerry()
        {
        }
        /**
         * Determine if the user is using an AOL User Agent (last updated 1.7)
         * @return boolean True if the browser is from AOL otherwise false
         */
        protected function checkForAol()
        {
        }
        /**
         * Determine if the browser is the GoogleBot or not (last updated 1.7)
         * @return boolean True if the browser is the GoogletBot otherwise false
         */
        protected function checkBrowserGoogleBot()
        {
        }
        /**
         * Determine if the browser is the YandexBot or not
         * @return boolean True if the browser is the YandexBot otherwise false
         */
        protected function checkBrowserYandexBot()
        {
        }
        /**
         * Determine if the browser is the YandexImageResizer or not
         * @return boolean True if the browser is the YandexImageResizer otherwise false
         */
        protected function checkBrowserYandexImageResizerBot()
        {
        }
        /**
         * Determine if the browser is the YandexCatalog or not
         * @return boolean True if the browser is the YandexCatalog otherwise false
         */
        protected function checkBrowserYandexCatalogBot()
        {
        }
        /**
         * Determine if the browser is the YandexNews or not
         * @return boolean True if the browser is the YandexNews otherwise false
         */
        protected function checkBrowserYandexNewsBot()
        {
        }
        /**
         * Determine if the browser is the YandexMetrika or not
         * @return boolean True if the browser is the YandexMetrika otherwise false
         */
        protected function checkBrowserYandexMetrikaBot()
        {
        }
        /**
         * Determine if the browser is the YandexDirect or not
         * @return boolean True if the browser is the YandexDirect otherwise false
         */
        protected function checkBrowserYandexDirectBot()
        {
        }
        /**
         * Determine if the browser is the YandexWebmaster or not
         * @return boolean True if the browser is the YandexWebmaster otherwise false
         */
        protected function checkBrowserYandexWebmasterBot()
        {
        }
        /**
         * Determine if the browser is the YandexFavicons or not
         * @return boolean True if the browser is the YandexFavicons otherwise false
         */
        protected function checkBrowserYandexFaviconsBot()
        {
        }
        /**
         * Determine if the browser is the YandexBlogs or not
         * @return boolean True if the browser is the YandexBlogs otherwise false
         */
        protected function checkBrowserYandexBlogsBot()
        {
        }
        /**
         * Determine if the browser is the YandexMedia or not
         * @return boolean True if the browser is the YandexMedia otherwise false
         */
        protected function checkBrowserYandexMediaBot()
        {
        }
        /**
         * Determine if the browser is the YandexVideo or not
         * @return boolean True if the browser is the YandexVideo otherwise false
         */
        protected function checkBrowserYandexVideoBot()
        {
        }
        /**
         * Determine if the browser is the YandexImages or not
         * @return boolean True if the browser is the YandexImages otherwise false
         */
        protected function checkBrowserYandexImagesBot()
        {
        }
        /**
         * Determine if the browser is the MSNBot or not (last updated 1.9)
         * @return boolean True if the browser is the MSNBot otherwise false
         */
        protected function checkBrowserMSNBot()
        {
        }
        /**
         * Determine if the browser is the BingBot or not (last updated 1.9)
         * @return boolean True if the browser is the BingBot otherwise false
         */
        protected function checkBrowserBingBot()
        {
        }
        /**
         * Determine if the browser is the W3C Validator or not (last updated 1.7)
         * @return boolean True if the browser is the W3C Validator otherwise false
         */
        protected function checkBrowserW3CValidator()
        {
        }
        /**
         * Determine if the browser is the Yahoo! Slurp Robot or not (last updated 1.7)
         * @return boolean True if the browser is the Yahoo! Slurp Robot otherwise false
         */
        protected function checkBrowserSlurp()
        {
        }
        /**
         * Determine if the browser is Edge or not
         * @return boolean True if the browser is Edge otherwise false
         */
        protected function checkBrowserEdge()
        {
        }
        /**
         * Determine if the browser is Internet Explorer or not (last updated 1.7)
         * @return boolean True if the browser is Internet Explorer otherwise false
         */
        protected function checkBrowserInternetExplorer()
        {
        }
        /**
         * Determine if the browser is Opera or not (last updated 1.7)
         * @return boolean True if the browser is Opera otherwise false
         */
        protected function checkBrowserOpera()
        {
        }
        /**
         * Determine if the browser is Chrome or not (last updated 1.7)
         * @return boolean True if the browser is Chrome otherwise false
         */
        protected function checkBrowserChrome()
        {
        }
        /**
         * Determine if the browser is WebTv or not (last updated 1.7)
         * @return boolean True if the browser is WebTv otherwise false
         */
        protected function checkBrowserWebTv()
        {
        }
        /**
         * Determine if the browser is NetPositive or not (last updated 1.7)
         * @return boolean True if the browser is NetPositive otherwise false
         */
        protected function checkBrowserNetPositive()
        {
        }
        /**
         * Determine if the browser is Galeon or not (last updated 1.7)
         * @return boolean True if the browser is Galeon otherwise false
         */
        protected function checkBrowserGaleon()
        {
        }
        /**
         * Determine if the browser is Konqueror or not (last updated 1.7)
         * @return boolean True if the browser is Konqueror otherwise false
         */
        protected function checkBrowserKonqueror()
        {
        }
        /**
         * Determine if the browser is iCab or not (last updated 1.7)
         * @return boolean True if the browser is iCab otherwise false
         */
        protected function checkBrowserIcab()
        {
        }
        /**
         * Determine if the browser is OmniWeb or not (last updated 1.7)
         * @return boolean True if the browser is OmniWeb otherwise false
         */
        protected function checkBrowserOmniWeb()
        {
        }
        /**
         * Determine if the browser is Phoenix or not (last updated 1.7)
         * @return boolean True if the browser is Phoenix otherwise false
         */
        protected function checkBrowserPhoenix()
        {
        }
        /**
         * Determine if the browser is Firebird or not (last updated 1.7)
         * @return boolean True if the browser is Firebird otherwise false
         */
        protected function checkBrowserFirebird()
        {
        }
        /**
         * Determine if the browser is Netscape Navigator 9+ or not (last updated 1.7)
         * NOTE: (http://browser.netscape.com/ - Official support ended on March 1st, 2008)
         * @return boolean True if the browser is Netscape Navigator 9+ otherwise false
         */
        protected function checkBrowserNetscapeNavigator9Plus()
        {
        }
        /**
         * Determine if the browser is Shiretoko or not (https://wiki.mozilla.org/Projects/shiretoko) (last updated 1.7)
         * @return boolean True if the browser is Shiretoko otherwise false
         */
        protected function checkBrowserShiretoko()
        {
        }
        /**
         * Determine if the browser is Ice Cat or not (http://en.wikipedia.org/wiki/GNU_IceCat) (last updated 1.7)
         * @return boolean True if the browser is Ice Cat otherwise false
         */
        protected function checkBrowserIceCat()
        {
        }
        /**
         * Determine if the browser is Nokia or not (last updated 1.7)
         * @return boolean True if the browser is Nokia otherwise false
         */
        protected function checkBrowserNokia()
        {
        }
        /**
         * Determine if the browser is Firefox or not (last updated 1.7)
         * @return boolean True if the browser is Firefox otherwise false
         */
        protected function checkBrowserFirefox()
        {
        }
        /**
         * Determine if the browser is Firefox or not (last updated 1.7)
         * @return boolean True if the browser is Firefox otherwise false
         */
        protected function checkBrowserIceweasel()
        {
        }
        /**
         * Determine if the browser is Mozilla or not (last updated 1.7)
         * @return boolean True if the browser is Mozilla otherwise false
         */
        protected function checkBrowserMozilla()
        {
        }
        /**
         * Determine if the browser is Lynx or not (last updated 1.7)
         * @return boolean True if the browser is Lynx otherwise false
         */
        protected function checkBrowserLynx()
        {
        }
        /**
         * Determine if the browser is Amaya or not (last updated 1.7)
         * @return boolean True if the browser is Amaya otherwise false
         */
        protected function checkBrowserAmaya()
        {
        }
        /**
         * Determine if the browser is Safari or not (last updated 1.7)
         * @return boolean True if the browser is Safari otherwise false
         */
        protected function checkBrowserSafari()
        {
        }
        protected function checkBrowserSamsung()
        {
        }
        protected function checkBrowserSilk()
        {
        }
        protected function checkBrowserIframely()
        {
        }
        protected function checkBrowserCocoa()
        {
        }
        /**
         * Detect if URL is loaded from FacebookExternalHit
         * @return boolean True if it detects FacebookExternalHit otherwise false
         */
        protected function checkFacebookExternalHit()
        {
        }
        /**
         * Detect if URL is being loaded from internal Facebook browser
         * @return boolean True if it detects internal Facebook browser otherwise false
         */
        protected function checkForFacebookIos()
        {
        }
        /**
         * Detect Version for the Safari browser on iOS devices
         * @return boolean True if it detects the version correctly otherwise false
         */
        protected function getSafariVersionOnIos()
        {
        }
        /**
         * Detect Version for the Chrome browser on iOS devices
         * @return boolean True if it detects the version correctly otherwise false
         */
        protected function getChromeVersionOnIos()
        {
        }
        /**
         * Determine if the browser is iPhone or not (last updated 1.7)
         * @return boolean True if the browser is iPhone otherwise false
         */
        protected function checkBrowseriPhone()
        {
        }
        /**
         * Determine if the browser is iPad or not (last updated 1.7)
         * @return boolean True if the browser is iPad otherwise false
         */
        protected function checkBrowseriPad()
        {
        }
        /**
         * Determine if the browser is iPod or not (last updated 1.7)
         * @return boolean True if the browser is iPod otherwise false
         */
        protected function checkBrowseriPod()
        {
        }
        /**
         * Determine if the browser is Android or not (last updated 1.7)
         * @return boolean True if the browser is Android otherwise false
         */
        protected function checkBrowserAndroid()
        {
        }
        /**
         * Determine if the browser is Vivaldi
         * @return boolean True if the browser is Vivaldi otherwise false
         */
        protected function checkBrowserVivaldi()
        {
        }
        /**
         * Determine if the browser is Yandex
         * @return boolean True if the browser is Yandex otherwise false
         */
        protected function checkBrowserYandex()
        {
        }
        /**
         * Determine if the browser is a PlayStation
         * @return boolean True if the browser is PlayStation otherwise false
         */
        protected function checkBrowserPlayStation()
        {
        }
        /**
         * Determine the user's platform (last updated 2.0)
         */
        protected function checkPlatform()
        {
        }
    }
}

namespace Viocon {
    /**
     * This class gives the ability to access non-static methods statically
     *
     * Class AliasFacade
     *
     * @package Viocon
     */
    class AliasFacade
    {
        /**
         * @var Container
         */
        protected static $vioconInstance;
        /**
         * @param $method
         * @param $args
         *
         * @return mixed
         */
        public static function __callStatic($method, $args)
        {
        }
        /**
         * @param Container $instance
         */
        public static function setVioconInstance(\Viocon\Container $instance)
        {
        }
        /**
         * @return \Viocon\Container $instance
         */
        public static function getVioconInstance()
        {
        }
    }
    class Container
    {
        /**
         * @var array
         */
        public $registry = array();
        /**
         * Singleton instances
         *
         * @var array
         */
        public $singletons = array();
        public function __construct($alias = null)
        {
        }
        /**
         * Register an object with a key
         *
         * @param  string $key
         * @param  mixed  $object
         * @param  bool   $singleton
         *
         * @return void
         */
        public function set($key, $object, $singleton = false)
        {
        }
        /**
         * If we have a registry for the given key
         *
         * @param  string $key
         *
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * Register as singleton.
         *
         * @param  string $key
         * @param  mixed  $object
         *
         * @return void
         */
        public function singleton($key, $object)
        {
        }
        /**
         * Register or replace an instance as a singleton.
         * Useful for replacing with Mocked instance
         *
         * @param  string $key
         * @param  mixed  $instance
         *
         * @return void
         */
        public function setInstance($key, $instance)
        {
        }
        /**
         * Build from the given key.
         * If there is a class registered with Container::set() then it's instance
         * will be returned. If a closure is registered, a closure's return value
         * will be returned. If nothing is registered then it will try to build an
         * instance with new $key(...).
         *
         * $parameters will be passed to closure or class constructor.
         *
         *
         * @param  string $key
         * @param  array  $parameters
         *
         * @return mixed
         */
        public function build($key, $parameters = array())
        {
        }
        /**
         * Instantiate an instance of the given type.
         *
         * @param  string $key
         * @param  array  $parameters
         *
         * @throws \Exception
         * @return mixed
         */
        protected function instanciate($key, $parameters = null)
        {
        }
    }
    class VioconException extends \Exception
    {
    }
}

namespace WpFluent {
    class Connection
    {
        /**
         * @var Container
         */
        protected $container;
        /**
         * @var string
         */
        protected $adapter;
        /**
         * @var array
         */
        protected $adapterConfig;
        /**
         * @var \wpdb $wpdb
         */
        protected $dbInstance;
        /**
         * @var \wpdb $wpdb
         */
        protected $wpdb;
        /**
         * @var Connection
         */
        protected static $storedConnection;
        /**
         * @var EventHandler
         */
        protected $eventHandler;
        /**
         * @param                $wpdb
         * @param array          $adapterConfig
         * @param null|string    $alias
         * @param null|Container $container
         */
        public function __construct($wpdb, array $config = array(), $alias = null, \Viocon\Container $container = null)
        {
        }
        /**
         * Create an easily accessible query builder alias
         *
         * @param $alias
         */
        public function createAlias($alias)
        {
        }
        /**
         * Returns an instance of Query Builder
         */
        public function getQueryBuilder()
        {
        }
        /**
         * Create the connection adapter
         */
        protected function connect()
        {
        }
        /**
         * @param $db
         *
         * @return $this
         */
        public function setDbInstance($db)
        {
        }
        /**
         * @return \wpdb
         */
        public function getDbInstance()
        {
        }
        /**
         * @param $adapter
         *
         * @return $this
         */
        public function setAdapter($adapter = 'mysql')
        {
        }
        /**
         * @return string
         */
        public function getAdapter()
        {
        }
        /**
         * @param array $adapterConfig
         *
         * @return $this
         */
        public function setAdapterConfig(array $adapterConfig)
        {
        }
        /**
         * @return array
         */
        public function getAdapterConfig()
        {
        }
        /**
         * @return Container
         */
        public function getContainer()
        {
        }
        /**
         * @return EventHandler
         */
        public function getEventHandler()
        {
        }
        /**
         * @return Connection
         */
        public static function getStoredConnection()
        {
        }
    }
    /**
     * This class gives the ability to access non-static methods statically
     *
     * Class AliasFacade
     *
     * @package WpFluent
     */
    class AliasFacade
    {
        /**
         * @var QueryBuilderHandler
         */
        protected static $queryBuilderInstance;
        /**
         * @param $method
         * @param $args
         *
         * @return mixed
         */
        public static function __callStatic($method, $args)
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilderInstance
         */
        public static function setQueryBuilderInstance($queryBuilderInstance)
        {
        }
    }
    class EventHandler
    {
        /**
         * @var array
         */
        protected $events = array();
        /**
         * @var array
         */
        protected $firedEvents = array();
        /**
         * @return array
         */
        public function getEvents()
        {
        }
        /**
         * @param $event
         * @param $table
         *
         * @return callable|null
         */
        public function getEvent($event, $table = ':any')
        {
        }
        /**
         * @param          $event
         * @param string   $table
         * @param callable $action
         *
         * @return void
         */
        public function registerEvent($event, $table, \Closure $action)
        {
        }
        /**
         * @param          $event
         * @param string   $table
         *
         * @return void
         */
        public function removeEvent($event, $table = ':any')
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilder
         * @param                     $event
         * @return mixed
         */
        public function fireEvents($queryBuilder, $event)
        {
        }
    }
}

namespace WpFluent\QueryBuilder {
    class QueryBuilderHandler
    {
        /**
         * @var \Viocon\Container
         */
        protected $container;
        /**
         * @var Connection
         */
        protected $connection;
        /**
         * @var array
         */
        protected $statements = array();
        /**
         * @var \wpdb
         */
        protected $db;
        /**
         * @var null|string
         */
        protected $dbStatement = null;
        /**
         * @var null|string
         */
        protected $tablePrefix = null;
        /**
         * @var \WpFluent\QueryBuilder\Adapters\BaseAdapter
         */
        protected $adapterInstance;
        /**
         * The PDO fetch parameters to use
         *
         * @var array
         */
        protected $fetchParameters = array(\PDO::FETCH_OBJ);
        /**
         * @param null|\WpFluent\Connection $connection
         *
         * @throws \WpFluent\Exception
         */
        public function __construct(\WpFluent\Connection $connection = null)
        {
        }
        /**
         * Set the fetch mode
         *
         * @param $mode
         * @return $this
         */
        public function setFetchMode($mode)
        {
        }
        /**
         * Fetch query results as object of specified type
         *
         * @param $className
         * @param array $constructorArgs
         * @return QueryBuilderHandler
         */
        public function asObject($className, $constructorArgs = array())
        {
        }
        /**
         * @param null|\WpFluent\Connection $connection
         *
         * @return static
         */
        public function newQuery(\WpFluent\Connection $connection = null)
        {
        }
        /**
         * @param       $sql
         * @param array $bindings
         *
         * @return $this
         */
        public function query($sql, $bindings = array())
        {
        }
        /**
         * @param $rawSql
         *
         * @return float execution time
         */
        public function statement($rawSql)
        {
        }
        /**
         * Get all rows
         *
         * @return array|object|null
         * @throws \WpFluent\Exception
         */
        public function get()
        {
        }
        /**
         * Get first row
         *
         * @return \stdClass|null
         */
        public function first()
        {
        }
        /**
         * @param        $value
         * @param string $fieldName
         *
         * @return null|\stdClass
         */
        public function findAll($fieldName, $value)
        {
        }
        /**
         * @param        $value
         * @param string $fieldName
         *
         * @return null|\stdClass
         */
        public function find($value, $fieldName = 'id')
        {
        }
        /**
         * Get count of rows
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * @param $type
         *
         * @return int
         */
        protected function aggregate($type)
        {
        }
        /**
         * @param string $type
         * @param array  $dataToBePassed
         *
         * @return mixed
         * @throws Exception
         */
        public function getQuery($type = 'select', $dataToBePassed = array())
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilder
         * @param null                $alias
         *
         * @return Raw
         */
        public function subQuery(\WpFluent\QueryBuilder\QueryBuilderHandler $queryBuilder, $alias = null)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function insert($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function insertIgnore($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function replace($data)
        {
        }
        /**
         * @param $data
         *
         * @throws \WpFluent\Exception
         */
        public function update($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function updateOrInsert($data)
        {
        }
        /**
         * @param $data
         *
         * @return $this
         */
        public function onDuplicateKeyUpdate($data)
        {
        }
        /**
         * @return mixed
         * @throws \WpFluent\Exception
         */
        public function delete()
        {
        }
        /**
         * @param string|array $tables Single table or multiple tables
         *                             as an array or as multiple parameters
         *
         * @return static
         */
        public function table($tables)
        {
        }
        /**
         * @param $tables
         *
         * @return $this
         */
        public function from($tables)
        {
        }
        /**
         * @param $fields
         *
         * @return $this
         */
        public function select($fields)
        {
        }
        /**
         * @param $fields
         *
         * @return $this
         */
        public function selectDistinct($fields)
        {
        }
        /**
         * @param $field
         *
         * @return $this
         */
        public function groupBy($field)
        {
        }
        /**
         * @param        $fields
         * @param string $defaultDirection
         *
         * @return $this
         */
        public function orderBy($fields, $defaultDirection = 'ASC')
        {
        }
        /**
         * @param $limit
         *
         * @return $this
         */
        public function limit($limit)
        {
        }
        /**
         * @param $offset
         *
         * @return $this
         */
        public function offset($offset)
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $joiner
         *
         * @return $this
         */
        public function having($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         *
         * @return $this
         */
        public function orHaving($key, $operator, $value)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function where($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orWhere($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function whereNot($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orWhereNot($key, $operator = null, $value = null)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function whereIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function whereNotIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function orWhereIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function orWhereNotIn($key, $values)
        {
        }
        /**
         * @param $key
         * @param $valueFrom
         * @param $valueTo
         *
         * @return $this
         */
        public function whereBetween($key, $valueFrom, $valueTo)
        {
        }
        /**
         * @param $key
         * @param $valueFrom
         * @param $valueTo
         *
         * @return $this
         */
        public function orWhereBetween($key, $valueFrom, $valueTo)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function whereNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function whereNotNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function orWhereNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function orWhereNotNull($key)
        {
        }
        protected function whereNullHandler($key, $prefix = '', $operator = '')
        {
        }
        /**
         * @param        $table
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $type
         *
         * @return $this
         */
        public function join($table, $key, $operator = null, $value = null, $type = 'inner')
        {
        }
        /**
         * Runs a transaction
         *
         * @param $callback
         *
         * @return $this
         */
        public function transaction(\Closure $callback)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function leftJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function rightJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function innerJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * Add a raw query
         *
         * @param $value
         * @param $bindings
         *
         * @return mixed
         */
        public function raw($value, $bindings = array())
        {
        }
        /**
         * Return db instance
         *
         * @return \wpdb
         */
        public function db()
        {
        }
        /**
         * @param Connection $connection
         *
         * @return $this
         */
        public function setConnection(\WpFluent\Connection $connection)
        {
        }
        /**
         * @return Connection
         */
        public function getConnection()
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function whereHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
        /**
         * Add table prefix (if given) on given string.
         *
         * @param      $values
         * @param bool $tableFieldMix If we have mixes of field and table names with a "."
         *
         * @return array|mixed
         */
        public function addTablePrefix($values, $tableFieldMix = true)
        {
        }
        /**
         * @param $key
         * @param $value
         */
        protected function addStatement($key, $value)
        {
        }
        /**
         * @param $event
         * @param $table
         *
         * @return callable|null
         */
        public function getEvent($event, $table = ':any')
        {
        }
        /**
         * @param          $event
         * @param string   $table
         * @param callable $action
         *
         * @return void
         */
        public function registerEvent($event, $table, \Closure $action)
        {
        }
        /**
         * @param          $event
         * @param string   $table
         *
         * @return void
         */
        public function removeEvent($event, $table = ':any')
        {
        }
        /**
         * @param      $event
         * @return mixed
         */
        public function fireEvents($event)
        {
        }
        /**
         * @return array
         */
        public function getStatements()
        {
        }
        /**
         * Get the paginated rows.
         *
         * @param null $perPage
         * @param array $columns
         *
         * @return array
         */
        public function paginate($perPage = null, $columns = array('*'))
        {
        }
        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param mixed $value
         * @param callable $callback
         * @param callable $default
         * @return mixed
         */
        public function when($value, $callback, $default = null)
        {
        }
    }
    class Transaction extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * Commit the database changes
         */
        public function commit()
        {
        }
        /**
         * Rollback the database changes
         */
        public function rollback()
        {
        }
    }
    class JoinBuilder extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function on($key, $operator, $value)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orOn($key, $operator, $value)
        {
        }
        /**
         * @param        $key
         * @param null   $operator
         * @param null   $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function joinHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
    }
    class Raw
    {
        /**
         * @var string
         */
        protected $value;
        /**
         * @var array
         */
        protected $bindings;
        public function __construct($value, $bindings = array())
        {
        }
        public function getBindings()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
    }
}

namespace WpFluent\QueryBuilder\Adapters {
    abstract class BaseAdapter
    {
        /**
         * @var \WpFluent\Connection
         */
        protected $connection;
        /**
         * @var \Viocon\Container
         */
        protected $container;
        public function __construct(\WpFluent\Connection $connection)
        {
        }
        /**
         * Build select query string and bindings
         *
         * @param $statements
         *
         * @throws Exception
         * @return array
         */
        public function select($statements)
        {
        }
        /**
         * Build just criteria part of the query
         *
         * @param      $statements
         * @param bool $bindValues
         *
         * @return array
         */
        public function criteriaOnly($statements, $bindValues = true)
        {
        }
        /**
         * Build Insert query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function insert($statements, array $data)
        {
        }
        /**
         * Build Insert Ignore query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function insertIgnore($statements, array $data)
        {
        }
        /**
         * Build Insert Ignore query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function replace($statements, array $data)
        {
        }
        /**
         * Build update query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function update($statements, array $data)
        {
        }
        /**
         * Build delete query
         *
         * @param $statements
         *
         * @return array
         * @throws Exception
         */
        public function delete($statements)
        {
        }
        /**
         * Array concatenating method, like implode.
         * But it does wrap sanitizer and trims last glue
         *
         * @param array $pieces
         * @param       $glue
         * @param bool  $wrapSanitizer
         *
         * @return string
         */
        protected function arrayStr(array $pieces, $glue, $wrapSanitizer = true)
        {
        }
        /**
         * Join different part of queries with a space.
         *
         * @param array $pieces
         *
         * @return string
         */
        protected function concatenateQuery(array $pieces)
        {
        }
        /**
         * Build generic criteria string and bindings from statements, like "a = b and c = ?"
         *
         * @param      $statements
         * @param bool $bindValues
         *
         * @return array
         */
        protected function buildCriteria($statements, $bindValues = true)
        {
        }
        /**
         * Wrap values with adapter's sanitizer like, '`'
         *
         * @param $value
         *
         * @return string
         */
        public function wrapSanitizer($value)
        {
        }
        /**
         * Build criteria string and binding with various types added, like WHERE and Having
         *
         * @param      $statements
         * @param      $key
         * @param      $type
         * @param bool $bindValues
         *
         * @return array
         */
        protected function buildCriteriaWithType($statements, $key, $type, $bindValues = true)
        {
        }
        /**
         * Build join string
         *
         * @param $statements
         *
         * @return array|string
         */
        protected function buildJoin($statements)
        {
        }
    }
    class Mysql extends \WpFluent\QueryBuilder\Adapters\BaseAdapter
    {
        /**
         * @var string
         */
        protected $sanitizer = '`';
    }
}

namespace WpFluent\QueryBuilder {
    class TransactionHaltException extends \Exception
    {
    }
    class NestedCriteria extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * @param        $key
         * @param null   $operator
         * @param null   $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function whereHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
    }
    class QueryObject
    {
        /**
         * @var string
         */
        protected $sql;
        /**
         * @var \wpdb
         */
        protected $db;
        /**
         * @var array
         */
        protected $bindings = array();
        public function __construct($sql, array $bindings)
        {
        }
        /**
         * @return string
         */
        public function getSql()
        {
        }
        /**
         * @return array
         */
        public function getBindings()
        {
        }
        /**
         * Get the raw/bound sql
         *
         * @return string
         */
        public function getRawSql()
        {
        }
        /**
         * Replaces any parameter placeholders in a query with the value of that
         * parameter. Useful for debugging. Assumes anonymous parameters from
         * $params are are in the same order as specified in $query
         *
         * Reference: http://stackoverflow.com/a/1376838/656489
         *
         * @param string $query  The sql query with parameter placeholders
         * @param array  $params The array of substitution parameters
         *
         * @return string The interpolated query
         */
        protected function interpolateQuery($query, $params)
        {
        }
    }
}

namespace WpFluent {
    class Exception extends \Exception
    {
    }
}

namespace FluentForm\App\Services {
    class AdminNotices
    {
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function showNotice()
        {
        }
        public function addNotice($notice)
        {
        }
        public function noticeActions()
        {
        }
        public function renderNotice($notice, $notice_key = false)
        {
        }
        public function hasNotice()
        {
        }
        public function getNoticePref()
        {
        }
        public function shouldShowNotice($noticeName)
        {
        }
    }
}

namespace FluentForm\Framework\Config {
    class Config implements \ArrayAccess
    {
        /**
         * All array items from all files from /config directory
         * @var array
         */
        protected $repository = array();
        /**
         * Initiate the instance
         * @param array $repository
         */
        public function __construct($repository = array())
        {
        }
        /**
         * Determine if the given configuration value exists.
         *
         * @param  string  $key
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         */
        public function all()
        {
        }
        /**
         * Get the specified configuration value.
         *
         * @param  array|string  $key
         * @param  mixed   $default
         * @return mixed
         */
        public function get($key = null, $default = null)
        {
        }
        /**
         * Set a given configuration value.
         *
         * @param  array|string  $key
         * @param  mixed   $value
         * @return void
         */
        public function set($key, $value)
        {
        }
        /**
         * Dynamic Getter
         * @param  string $key
         * @return mixed
         */
        public function __get($key = null)
        {
        }
        /**
         * Dynamic Setter
         * @param  string $key
         * @param  mixed $key
         * @return void
         */
        public function __set($key, $value)
        {
        }
        /**
         * Determine if the given item exists.
         *
         * @param  string  $key
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($key)
        {
        }
        /**
         * Get an item.
         *
         * @param  string  $key
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($key)
        {
        }
        /**
         * Set an item.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($key, $value)
        {
        }
        /**
         * Unset an item.
         *
         * @param  string  $key
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($key)
        {
        }
    }
    class ConfigProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
        /**
         * Loads all configuration files from config directory
         * @return void
         */
        public function loadConfig()
        {
        }
        /**
         * Get nested directory names joined by a "."
         * @param  string $file [A config file]
         * @param  string $configPath
         * @return string
         */
        protected function getDirectory($file, $configPath)
        {
        }
    }
}

namespace FluentForm\Framework\Foundation {
    class Container implements \ArrayAccess
    {
        /**
         * $container The service container
         * @var array
         */
        protected static $container = array('facades' => array(), 'aliases' => array(), 'resolved' => array(), 'bindings' => array(), 'singletons' => array());
        /**
         * Bind an instance into service container
         * @param string $key identifier
         * @param mixed $concrete
         * @param string $facade [optional facade]
         * @param string $alias [optional alias]
         * @return void
         */
        public function bind($key, $concrete = null, $facade = null, $alias = null, $shared = false)
        {
        }
        /**
         * Bind a singleton instance into service container
         * @param string $key identifier
         * @param mixed $concrete
         * @param string $facade [optional facade]
         * @param string $alias [optional alias]
         * @return void
         */
        public function bindSingleton($key, $concrete = null, $facade = null, $alias = null)
        {
        }
        /**
         * Bind a singleton instance into service container
         * @param string $key identifier
         * @param mixed $concrete
         * @param string $facade [optional facade]
         * @param string $alias [optional alias]
         * @return void
         */
        public function bindInstance($key, $concrete, $facade = null, $alias = null)
        {
        }
        /**
         * Register a facade for a registered instance
         * @param string $key
         * @param string $facade
         * @return string
         */
        public function facade($key, $facade)
        {
        }
        /**
         * Register an alias for a registered instance
         * @param string $key
         * @param string $alias
         * @return string
         */
        public function alias($key, $aliases)
        {
        }
        /**
         * Resolve an instance from container
         * @param string $key
         * @return mixed
         * @throws \FluentForm\Framework\Exception\UnResolveableEntityException
         */
        public function make($key = null, array $params = [])
        {
        }
        /**
         * Resolve an item from the container
         * @param mixed $value
         * @return mixed
         */
        protected function resolve($value, $params = [])
        {
        }
        /**
         * Build a concrete class with all dependencies
         * @param string $value FQN class name
         * @return mixed resolved instance
         */
        protected function build($value, $params = [])
        {
        }
        /**
         * Resolve all dependencies of a single class
         * @param array $dependencies Constructor Parameters
         * @return array An array of all the resolved dependencies of one class
         */
        protected function resolveDependencies(array $dependencies)
        {
        }
        /**
         * Resolves a single class instance
         * @param ReflectionParameter $parameter
         * @return mixed
         * @throws Exception
         */
        protected function resolveClass(\ReflectionParameter $parameter)
        {
        }
        /**
         * Get the parameter type for the given parameter.
         *
         * @return object ReflectionClass|ReflectionNamedType
         */
        protected function getParameterType($parameter)
        {
        }
        /**
         * Get the alias for a key if available.
         * @param string $key
         * @return string
         */
        public function getAlias($key)
        {
        }
        /**
         * Check if a given class/interface exists
         * @param string $key
         * @return bool
         */
        protected function classExists($key)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param string $offset
         * @return bool
         */
        public function bound($offset)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param string $offset
         * @return bool
         */
        public function has($offset)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param string $offset
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        /**
         * Get the value from given offset
         * @param string $offset
         * @param mixed $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Set the value at a given offset
         * @param string $offset
         * @param mixed $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset the value at a given offset
         * @param string $offset
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        /**
         * Determine whether a shared entity is resolved.
         * @param string $key
         * @return bool
         */
        public function resolved($key)
        {
        }
        /**
         * Get one or all resolved instance(s)
         * @param string $key
         * @return mixed
         */
        public function getResolved($key = null)
        {
        }
        /**
         * Clear one or all resolved instance(s)
         * @param string $key
         * @return void
         */
        public function clearResolved($key = null)
        {
        }
        /**
         * Get one or all binding(s)
         * @param string $key
         * @return void
         */
        public function getBindings($key = null)
        {
        }
        /**
         * Clear one or all binding(s)
         * @param string $key
         * @return void
         */
        public function clearBindings($key = null)
        {
        }
        /**
         * Get one or all singletons(s)
         * @param string $key
         * @return void
         */
        public function getSingletons($key = null)
        {
        }
        /**
         * Clear one or all singletons(s)
         * @param string $key
         * @return void
         */
        public function clearSingletons($key = null)
        {
        }
    }
    trait PathsAndUrlsTrait
    {
        /**
         * Get plugin's main file path
         * @return string [plugin file path]
         */
        public function baseFile()
        {
        }
        /**
         * Get plugin's root path
         * @param  string $path
         * @return string
         */
        public function path($path = '')
        {
        }
        /**
         * Get plugin's /app path
         * @param  string $path
         * @return string
         */
        public function appPath($path = '')
        {
        }
        /**
         * Get plugin's /config path
         * @param  string $path
         * @return string
         */
        public function configPath($path = '')
        {
        }
        /**
         * Get plugin's /framework path
         * @param  string $path
         * @return string
         */
        public function frameworkPath($path = '')
        {
        }
        /**
         * Get plugin's /resources path
         * @param  string $path
         * @return string
         */
        public function resourcePath($path = '')
        {
        }
        /**
         * Get plugin's /resources/languages path
         * @param  string $path
         * @return string
         */
        public function languagePath($path = '')
        {
        }
        /**
         * Get plugin's /storage path
         * @param  string $path
         * @return string
         */
        public function storagePath($path = '')
        {
        }
        /**
         * Get plugin's /resources/views path
         * @param  string $path
         * @return string
         */
        public function viewPath($path = '')
        {
        }
        /**
         * Get plugin's /resources/assets path
         * @param  string $path
         * @return string
         */
        public function assetPath($path = '')
        {
        }
        /**
         * Get plugin's /public path
         * @param  string $path
         * @return string
         */
        public function publicPath($path = '')
        {
        }
        /**
         * Get plugin's root url
         * @param  string $url
         * @return string
         */
        public function url($url = '')
        {
        }
        /**
         * Get plugin's /public url
         * @param  string $url
         * @return string
         */
        public function publicUrl($url = '')
        {
        }
        /**
         * Get plugin's /resources url
         * @param  string $url
         * @return string
         */
        public function resourceUrl($url = '')
        {
        }
        /**
         * Get plugin's /resources/assets url
         * @param  string $url
         * @return string
         */
        public function assetUrl($url = '')
        {
        }
    }
    trait SetGetAttributesTrait
    {
        /**
         * Dynamic getter for application
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Dynamic setter for application
         * @param string $key
         * @param mixed $value
         */
        public function __set($key, $value)
        {
        }
        /**
         * Getter for retrieving plugin's base file path
         * @return string
         */
        public function getBaseFile()
        {
        }
        /**
         * Get application's main config
         * @return array
         */
        public function getAppConfig()
        {
        }
        /**
         * Get application's providers
         * @param  string $type [core|plugin]
         * @return array
         */
        public function getProviders($type = null)
        {
        }
        /**
         * Get plugin name
         * @return string
         */
        public function getName()
        {
        }
        /**
         * Get plugin slug
         * @return string
         */
        public function getSlug()
        {
        }
        /**
         * Get plugin version
         * @return string
         */
        public function getVersion()
        {
        }
        /**
         * Get plugin root namespace
         * @return string
         */
        public function getNamespace()
        {
        }
        /**
         * Get plugin text domain
         * @return string
         */
        public function getTextDomain()
        {
        }
        /**
         * Get application evironment
         * @return string
         */
        public function getEnv()
        {
        }
    }
    trait FacadeLoaderTrait
    {
        /**
         * Register facade/alias loader
         * @return void
         */
        protected function registerAppFacadeLoader()
        {
        }
        /**
         * Facad/Alias loader
         * @param  [type] $class [description]
         * @return [type]        [description]
         */
        protected function aliasLoader($class)
        {
        }
        /**
         * Retrieve facade file content
         * @param  string $alias
         * @param  string $key
         * @return string
         */
        protected function getFileData($alias, $key)
        {
        }
    }
    trait HelpersTrait
    {
        /**
         * $hookReference Current action reference
         * @var null
         */
        protected $hookReference = null;
        /**
         * Load a file using include_once
         * @return boolean
         */
        public function load($file)
        {
        }
        /**
         * Checks if the user is on wp-admin area (visiting backend)
         * (It doesn't check whether user is authenticated ro not)
         * @return boolean
         */
        public function isUserOnAdminArea()
        {
        }
        /**
         * Application's callbacks parser
         * @param  mixed $args
         * @return mixed
         */
        public function parseHandler($args)
        {
        }
        /**
         * Make a unique key/hook with the application slug prefix
         * @param  string $tag
         * @param  string $prefix [optional prefix instead of app slug]
         * @return string
         */
        public function makeKey($tag, $prefix = null)
        {
        }
        /**
         * Add/Register an ajax action
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @param string $scope [specify the scope of the ajax action|internal use]
         * @return Framework\Foundation\HookReference
         */
        private function addAjaxAction($tag, $handler, $priority, $scope)
        {
        }
        /**
         * Add an ajax action for authenticated user
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @return mixed [a reference to the handler to remove the action later]
         */
        public function addAdminAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Add an ajax action for unauthenticated user
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @return mixed [a reference to the handler to remove the action later]
         */
        public function addPublicAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove/Unregister a registered ajax action
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @param string $scope [specify the scope of the ajax action|internal use]
         * @return mixed [a reference to the handler to remove the action later]
         */
        private function removeAjaxAction($tag, $handler, $priority, $scope)
        {
        }
        /**
         * Remove an ajax action for authenticated user
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @return bool [true on success or false on failure]
         */
        public function removeAdminAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove an ajax action for unauthenticated user
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @return bool [true on success or false on failure]
         */
        public function removePublicAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Add WordPress Filter
         * @param  string $tag
         * @param  mixed $handler
         * @param  integer $priority
         * @param  integer $acceptedArgs
         * @return Framework\Foundation\HookReference
         */
        public function addFilter($tag, $handler, $priority = 10, $acceptedArgs = 1)
        {
        }
        /**
         * Remove WordPress Filter.
         * @param  string $tag
         * @param  mixed  $handler
         * @param  integer $priority
         * @return true
         */
        public function removeFilter($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove WordPress' All Filters.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeFilters($tag, $priority = false)
        {
        }
        /**
         * Apply WordPress Filter.
         * @return mixed [filtered content]
         */
        public function applyFilters()
        {
        }
        /**
         * Add WordPress Action
         * @param  string $tag
         * @param  mixed $handler
         * @param  integer $priority
         * @param  integer $acceptedArgs
         * @return Framework\Foundation\HookReference
         */
        public function addAction($tag, $handler, $priority = 10, $acceptedArgs = 1)
        {
        }
        /**
         * Remove WordPress' Action.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove WordPress' All Actions.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeActions($tag, $priority = false)
        {
        }
        /**
         * Do WordPress Action.
         * @return void
         */
        public function doAction()
        {
        }
        /**
         * Add WordPress Short Code.
         * @param string $tag
         * @param mixed $handler
         */
        public function addShortCode($tag, $handler)
        {
        }
        /**
         * Remove WordPress Short Code.
         * @param string $content
         * @param bool $ignoreHtml
         */
        public function removeShortCode($tag)
        {
        }
        /**
         * Do WordPress Short Code.
         * @param string $content
         * @param bool $ignoreHtml
         */
        public function doShortCode($tag, $atts, $content = null, $ignoreHtml = false)
        {
        }
        /**
         * Format the short content (make shortcode content string)
         * @param  string $tag
         * @param  array $atts
         * @param  string $content
         * @return string
         */
        public function formatShortCode($tag, $atts, $content = null)
        {
        }
        /**
         * Store a reference of last action handler
         * @param reference $ref (Reference of registered function/handler)
         * @param string $tag
         * @return $this
         */
        public function setHookReference($ref, $tag)
        {
        }
        /**
         * Save the hook's handler reference
         * @param  string $key
         * @return reference
         */
        public function saveReference($key = null)
        {
        }
        /**
         * Register any callback/middleware to run before ajax callback
         * @param  string $actionName
         * @param  mixed $fn (WordPress permission name/closure)
         * @return $this
         */
        public function before($action, $fn)
        {
        }
    }
    class Application extends \FluentForm\Framework\Foundation\Container
    {
        use \FluentForm\Framework\Foundation\PathsAndUrlsTrait, \FluentForm\Framework\Foundation\SetGetAttributesTrait, \FluentForm\Framework\Foundation\FacadeLoaderTrait, \FluentForm\Framework\Foundation\HelpersTrait;
        /**
         * Framework Version
         */
        const VERSION = '1.0.0';
        /**
         * $baseFile root plugin file path
         * @var string
         */
        protected $baseFile = null;
        /**
         * The app config (/config/app.php)
         * @var array
         */
        protected $appConfig = null;
        /**
         * Callbacks for framework's booted event
         * @var array
         */
        protected $booted = array();
        /**
         * Callbacks for framework's ready event
         * @var array
         */
        protected $ready = array();
        /**
         * Get application version
         * @return string
         */
        public function version()
        {
        }
        /**
         * Static interface to initiate the application
         * @param string $baseFile (root plugin file path)
         * @param array $appConfig (/config/app.php)
         * @return $this
         */
        public static function run($baseFile, $appConfig)
        {
        }
        /**
         * Init the application
         * @param string $baseFile (root plugin file path)
         * @param array $appConfig (/config/app.php)
         */
        public function __construct($baseFile, $appConfig)
        {
        }
        /**
         * Bootup the application
         * @param string $baseFile (root plugin file path)
         * @param array $appConfig (/config/app.php)
         * @return void
         */
        protected function bootstrapApplication()
        {
        }
        /**
         * Register application base bindings
         * @return  void
         */
        protected function setAppBaseBindings()
        {
        }
        /**
         * Bind application instance
         * @return  void
         */
        protected function bindAppInstance()
        {
        }
        /**
         * Set Application paths
         * @return void
         */
        protected function registerAppPaths()
        {
        }
        /**
         * Set Application urls
         * @return void
         */
        protected function registerAppUrls()
        {
        }
        /**
         * Set Application Exception Handler
         * @return void
         */
        protected function setExceptionHandler()
        {
        }
        /**
         * load languages path for i18n pot files
         * @return bool
         */
        protected function loadApplicationTextDomain()
        {
        }
        /**
         * Bootstrap all service providers
         * @return void
         */
        protected function bootStrapApplicationProviders()
        {
        }
        /**
         * Boot application with providers
         * @param  array $providers
         * @return void
         */
        public function bootstrapWith(array $providers)
        {
        }
        /**
         * Get engine/core providers
         * @return array
         */
        public function getEngineProviders()
        {
        }
        /**
         * Get plugin providers (Common)
         * @return array
         */
        public function getCommonProviders()
        {
        }
        /**
         * Get plugin providers (Backend|Frontend)
         * @return array
         */
        public function getPluginProviders()
        {
        }
        /**
         * Register booted events
         * @param  mixed $callback
         * @return void
         */
        public function booted($callback)
        {
        }
        /**
         * Register ready events
         * @param  mixed $callback
         * @return void
         */
        public function ready($callback)
        {
        }
        /**
         * Fire application event's handlers
         * @param  array  $callbacks
         * @return void
         */
        public function fireCallbacks(array $callbacks)
        {
        }
    }
    class AppProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class Bootstrap
    {
        /**
         * The main plugin file path
         * @var strring
         */
        protected static $file = null;
        /**
         * The base dir path of the plugin
         * @var strring
         */
        protected static $basePath = null;
        /**
         * The app config (/config/app.php)
         * @var strring
         */
        protected static $config = array();
        /**
         * Conveniently start the framework
         * @param  string $file
         * @return $
         */
        public static function run($file)
        {
        }
        /**
         * Initialize the framework
         * @param  string $file [the main plugin file path]
         * @return void
         */
        public static function init($file)
        {
        }
        /**
         * Register activation/deactivation hooks
         * @return void
         */
        public static function registerHooks()
        {
        }
        /**
         * Register activation hook
         * @return bool
         */
        public static function registerActivationHook()
        {
        }
        public static function registerDeactivationHook()
        {
        }
        /**
         * Validate and activate the plugin
         * @return void
         */
        public static function activate($netowrkwide = false)
        {
        }
        public static function deactivate()
        {
        }
        /**
         * Validate the plugin by checking all rquired files/settings
         * @return void
         */
        public static function validatePlugin()
        {
        }
        /**
         * Register the autoloader
         * @return void
         */
        public static function registerAutoLoader()
        {
        }
        /**
         * Framework's custom autoloader
         * @param  string $class
         * @return mixed
         */
        public static function loader($class)
        {
        }
        /**
         * Register "init" hook to run the plugin
         * @return void
         */
        public static function registerApplication()
        {
        }
    }
    abstract class AppFacade
    {
        /**
         * $instance Application
         * @var \FluentForm\Framework\Foundation\Application
         */
        static $instance = null;
        /**
         * Sets the app instance from Application
         * @param \FluentForm\Framework\Foundation\Application $instance
         */
        public static function setApplication($instance)
        {
        }
        /**
         * Get the app instance stored earlier during the bootstrap
         * @param \FluentForm\Framework\Foundation\Application $instance
         */
        public static function getApplication()
        {
        }
        /**
         * Resolve the aliased class dynamically
         * @param  string $method
         * @param  string $params
         * @return mixed
         */
        public static function __callStatic($method, $params)
        {
        }
    }
    class HookReference
    {
        /**
         * construct the instance
         * @param Application $app
         * @param reference $ref
         * @param string $key
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app, $ref, $key = null)
        {
        }
        /**
         * Save the hook's handler reference
         * @param  string $key
         * @return reference
         */
        public function saveReference($key = null)
        {
        }
        /**
         * Get the reference
         * @return reference
         */
        public function reference()
        {
        }
    }
}

namespace FluentForm\Framework\View {
    class ViewProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
    }
    class View
    {
        /**
         * The Application (Framework)
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Resolved path of view
         * @var string
         */
        protected $path;
        /**
         * Passed data for the view
         * @var array
         */
        protected $data = [];
        /**
         * Shared data for the view
         * @var array
         */
        protected static $sharedData = [];
        /**
         * Registered composer callbacks for the view
         * @var array
         */
        protected static $composerCallbacks = [];
        /**
         * Make an instance of the the class
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct($app)
        {
        }
        /**
         * Add aditional view path mapped by a namespace
         * 
         * This will allow a developer to add additional view location from any
         * service provider (basically in booted method), so instead of loading
         * the view from resources/views directory, one can instruct the framework
         * to load a view from a different place registerd using following method:
         * add a namespaced path: $this->app->addNamespace('Public', path('public'));
         * once it is registered, then one can use: View::make('Public::view_name');
         * 
         * @param string $namespace
         * @param string $path
         */
        public function addNamespace($namespace, $path)
        {
        }
        /**
         * Generate and echo/print a view file
         * @param  string $path
         * @param  array  $data
         * @return void
         */
        public function render($path, $data = [])
        {
        }
        /**
         * Generate a view file
         * @param  string $path
         * @param  array  $data
         * @return string [generated html]
         * @throws InvalidArgumentException
         */
        public function make($path, $data = [])
        {
        }
        /**
         * Resolve the view file path
         * @param  string $path
         * @return string
         */
        protected function resolveFilePath($path)
        {
        }
        /**
         * Evaluate the view file
         * @param  string $path
         * @param  string $data
         * @return $this
         */
        protected function renderContent()
        {
        }
        /**
         * Call registered composer callbacks for this view
         * @return void
         */
        protected function callComposerCallbacks()
        {
        }
        /**
         * Gether shared & view data
         * @return array
         */
        protected function gatherData()
        {
        }
        /**
         * Share global data for any view
         * @param  string $key
         * @param  mixed $value
         * @return void
         */
        public function share($key, $value)
        {
        }
        /**
         * Register view composer calbacks for specific view
         * @param  string $viewName
         * @param  \closure $callback
         * @return void
         */
        public function composer($viewName, $callback)
        {
        }
        /**
         * Provides a fluent interface to set data
         * @param  mixed $key
         * @param  mixed $data
         * @return $this
         */
        public function with($name, $data = [])
        {
        }
        /**
         * Setter for the view
         * @param string $key
         * @param mixed $value
         */
        public function __set($key, $value)
        {
        }
        /**
         * Dump the view result
         * @return string
         */
        public function __toString()
        {
        }
    }
}

namespace FluentForm\Framework\Request {
    trait FileHandler
    {
        /**
         * Prepares HTTP files for Request
         *
         * @param array $files
         *
         * @return array
         */
        public function prepareFiles($files = [])
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\FileBag
         *
         * Converts uploaded files to UploadedFile instances.
         *
         * @param array|File $file A (multi-dimensional) array of uploaded file information
         *
         * @return File[]|File|null A (multi-dimensional) array of File instances
         */
        protected function convertFileInformation($file)
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\FileBag
         *
         * Fixes a malformed PHP $_FILES array.
         *
         * PHP has a bug that the format of the $_FILES array differs, depending on
         * whether the uploaded file fields had normal field names or array-like
         * field names ("normal" vs. "parent[child]").
         *
         * This method fixes the array to look like the "normal" $_FILES array.
         *
         * It's safe to pass an already converted array, in which case this method
         * just returns the original array unmodified.
         *
         * @return array
         */
        protected function fixPhpFilesArray($data)
        {
        }
    }
    class File extends \SplFileInfo implements \FluentValidator\Contracts\File
    {
        /**
         * A map of mime types and their default extensions.
         *
         * This list has been placed under the public domain by the Apache HTTPD project.
         * This list has been updated from upstream on 2013-04-23.
         *
         * @see http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
         */
        protected $defaultExtensions = ['application/andrew-inset' => 'ez', 'application/applixware' => 'aw', 'application/atom+xml' => 'atom', 'application/atomcat+xml' => 'atomcat', 'application/atomsvc+xml' => 'atomsvc', 'application/ccxml+xml' => 'ccxml', 'application/cdmi-capability' => 'cdmia', 'application/cdmi-container' => 'cdmic', 'application/cdmi-domain' => 'cdmid', 'application/cdmi-object' => 'cdmio', 'application/cdmi-queue' => 'cdmiq', 'application/cu-seeme' => 'cu', 'application/davmount+xml' => 'davmount', 'application/docbook+xml' => 'dbk', 'application/dssc+der' => 'dssc', 'application/dssc+xml' => 'xdssc', 'application/ecmascript' => 'ecma', 'application/emma+xml' => 'emma', 'application/epub+zip' => 'epub', 'application/exi' => 'exi', 'application/font-tdpfr' => 'pfr', 'application/gml+xml' => 'gml', 'application/gpx+xml' => 'gpx', 'application/gxf' => 'gxf', 'application/hyperstudio' => 'stk', 'application/inkml+xml' => 'ink', 'application/ipfix' => 'ipfix', 'application/java-archive' => 'jar', 'application/java-serialized-object' => 'ser', 'application/java-vm' => 'class', 'application/javascript' => 'js', 'application/json' => 'json', 'application/jsonml+json' => 'jsonml', 'application/lost+xml' => 'lostxml', 'application/mac-binhex40' => 'hqx', 'application/mac-compactpro' => 'cpt', 'application/mads+xml' => 'mads', 'application/marc' => 'mrc', 'application/marcxml+xml' => 'mrcx', 'application/mathematica' => 'ma', 'application/mathml+xml' => 'mathml', 'application/mbox' => 'mbox', 'application/mediaservercontrol+xml' => 'mscml', 'application/metalink+xml' => 'metalink', 'application/metalink4+xml' => 'meta4', 'application/mets+xml' => 'mets', 'application/mods+xml' => 'mods', 'application/mp21' => 'm21', 'application/mp4' => 'mp4s', 'application/msword' => 'doc', 'application/mxf' => 'mxf', 'application/octet-stream' => 'bin', 'application/oda' => 'oda', 'application/oebps-package+xml' => 'opf', 'application/ogg' => 'ogx', 'application/omdoc+xml' => 'omdoc', 'application/onenote' => 'onetoc', 'application/oxps' => 'oxps', 'application/patch-ops-error+xml' => 'xer', 'application/pdf' => 'pdf', 'application/pgp-encrypted' => 'pgp', 'application/pgp-signature' => 'asc', 'application/pics-rules' => 'prf', 'application/pkcs10' => 'p10', 'application/pkcs7-mime' => 'p7m', 'application/pkcs7-signature' => 'p7s', 'application/pkcs8' => 'p8', 'application/pkix-attr-cert' => 'ac', 'application/pkix-cert' => 'cer', 'application/pkix-crl' => 'crl', 'application/pkix-pkipath' => 'pkipath', 'application/pkixcmp' => 'pki', 'application/pls+xml' => 'pls', 'application/postscript' => 'ai', 'application/prs.cww' => 'cww', 'application/pskc+xml' => 'pskcxml', 'application/rdf+xml' => 'rdf', 'application/reginfo+xml' => 'rif', 'application/relax-ng-compact-syntax' => 'rnc', 'application/resource-lists+xml' => 'rl', 'application/resource-lists-diff+xml' => 'rld', 'application/rls-services+xml' => 'rs', 'application/rpki-ghostbusters' => 'gbr', 'application/rpki-manifest' => 'mft', 'application/rpki-roa' => 'roa', 'application/rsd+xml' => 'rsd', 'application/rss+xml' => 'rss', 'application/rtf' => 'rtf', 'application/sbml+xml' => 'sbml', 'application/scvp-cv-request' => 'scq', 'application/scvp-cv-response' => 'scs', 'application/scvp-vp-request' => 'spq', 'application/scvp-vp-response' => 'spp', 'application/sdp' => 'sdp', 'application/set-payment-initiation' => 'setpay', 'application/set-registration-initiation' => 'setreg', 'application/shf+xml' => 'shf', 'application/smil+xml' => 'smi', 'application/sparql-query' => 'rq', 'application/sparql-results+xml' => 'srx', 'application/srgs' => 'gram', 'application/srgs+xml' => 'grxml', 'application/sru+xml' => 'sru', 'application/ssdl+xml' => 'ssdl', 'application/ssml+xml' => 'ssml', 'application/tei+xml' => 'tei', 'application/thraud+xml' => 'tfi', 'application/timestamped-data' => 'tsd', 'application/vnd.3gpp.pic-bw-large' => 'plb', 'application/vnd.3gpp.pic-bw-small' => 'psb', 'application/vnd.3gpp.pic-bw-var' => 'pvb', 'application/vnd.3gpp2.tcap' => 'tcap', 'application/vnd.3m.post-it-notes' => 'pwn', 'application/vnd.accpac.simply.aso' => 'aso', 'application/vnd.accpac.simply.imp' => 'imp', 'application/vnd.acucobol' => 'acu', 'application/vnd.acucorp' => 'atc', 'application/vnd.adobe.air-application-installer-package+zip' => 'air', 'application/vnd.adobe.formscentral.fcdt' => 'fcdt', 'application/vnd.adobe.fxp' => 'fxp', 'application/vnd.adobe.xdp+xml' => 'xdp', 'application/vnd.adobe.xfdf' => 'xfdf', 'application/vnd.ahead.space' => 'ahead', 'application/vnd.airzip.filesecure.azf' => 'azf', 'application/vnd.airzip.filesecure.azs' => 'azs', 'application/vnd.amazon.ebook' => 'azw', 'application/vnd.americandynamics.acc' => 'acc', 'application/vnd.amiga.ami' => 'ami', 'application/vnd.android.package-archive' => 'apk', 'application/vnd.anser-web-certificate-issue-initiation' => 'cii', 'application/vnd.anser-web-funds-transfer-initiation' => 'fti', 'application/vnd.antix.game-component' => 'atx', 'application/vnd.apple.installer+xml' => 'mpkg', 'application/vnd.apple.mpegurl' => 'm3u8', 'application/vnd.aristanetworks.swi' => 'swi', 'application/vnd.astraea-software.iota' => 'iota', 'application/vnd.audiograph' => 'aep', 'application/vnd.blueice.multipass' => 'mpm', 'application/vnd.bmi' => 'bmi', 'application/vnd.businessobjects' => 'rep', 'application/vnd.chemdraw+xml' => 'cdxml', 'application/vnd.chipnuts.karaoke-mmd' => 'mmd', 'application/vnd.cinderella' => 'cdy', 'application/vnd.claymore' => 'cla', 'application/vnd.cloanto.rp9' => 'rp9', 'application/vnd.clonk.c4group' => 'c4g', 'application/vnd.cluetrust.cartomobile-config' => 'c11amc', 'application/vnd.cluetrust.cartomobile-config-pkg' => 'c11amz', 'application/vnd.commonspace' => 'csp', 'application/vnd.contact.cmsg' => 'cdbcmsg', 'application/vnd.cosmocaller' => 'cmc', 'application/vnd.crick.clicker' => 'clkx', 'application/vnd.crick.clicker.keyboard' => 'clkk', 'application/vnd.crick.clicker.palette' => 'clkp', 'application/vnd.crick.clicker.template' => 'clkt', 'application/vnd.crick.clicker.wordbank' => 'clkw', 'application/vnd.criticaltools.wbs+xml' => 'wbs', 'application/vnd.ctc-posml' => 'pml', 'application/vnd.cups-ppd' => 'ppd', 'application/vnd.curl.car' => 'car', 'application/vnd.curl.pcurl' => 'pcurl', 'application/vnd.dart' => 'dart', 'application/vnd.data-vision.rdz' => 'rdz', 'application/vnd.dece.data' => 'uvf', 'application/vnd.dece.ttml+xml' => 'uvt', 'application/vnd.dece.unspecified' => 'uvx', 'application/vnd.dece.zip' => 'uvz', 'application/vnd.denovo.fcselayout-link' => 'fe_launch', 'application/vnd.dna' => 'dna', 'application/vnd.dolby.mlp' => 'mlp', 'application/vnd.dpgraph' => 'dpg', 'application/vnd.dreamfactory' => 'dfac', 'application/vnd.ds-keypoint' => 'kpxx', 'application/vnd.dvb.ait' => 'ait', 'application/vnd.dvb.service' => 'svc', 'application/vnd.dynageo' => 'geo', 'application/vnd.ecowin.chart' => 'mag', 'application/vnd.enliven' => 'nml', 'application/vnd.epson.esf' => 'esf', 'application/vnd.epson.msf' => 'msf', 'application/vnd.epson.quickanime' => 'qam', 'application/vnd.epson.salt' => 'slt', 'application/vnd.epson.ssf' => 'ssf', 'application/vnd.eszigno3+xml' => 'es3', 'application/vnd.ezpix-album' => 'ez2', 'application/vnd.ezpix-package' => 'ez3', 'application/vnd.fdf' => 'fdf', 'application/vnd.fdsn.mseed' => 'mseed', 'application/vnd.fdsn.seed' => 'seed', 'application/vnd.flographit' => 'gph', 'application/vnd.fluxtime.clip' => 'ftc', 'application/vnd.framemaker' => 'fm', 'application/vnd.frogans.fnc' => 'fnc', 'application/vnd.frogans.ltf' => 'ltf', 'application/vnd.fsc.weblaunch' => 'fsc', 'application/vnd.fujitsu.oasys' => 'oas', 'application/vnd.fujitsu.oasys2' => 'oa2', 'application/vnd.fujitsu.oasys3' => 'oa3', 'application/vnd.fujitsu.oasysgp' => 'fg5', 'application/vnd.fujitsu.oasysprs' => 'bh2', 'application/vnd.fujixerox.ddd' => 'ddd', 'application/vnd.fujixerox.docuworks' => 'xdw', 'application/vnd.fujixerox.docuworks.binder' => 'xbd', 'application/vnd.fuzzysheet' => 'fzs', 'application/vnd.genomatix.tuxedo' => 'txd', 'application/vnd.geogebra.file' => 'ggb', 'application/vnd.geogebra.tool' => 'ggt', 'application/vnd.geometry-explorer' => 'gex', 'application/vnd.geonext' => 'gxt', 'application/vnd.geoplan' => 'g2w', 'application/vnd.geospace' => 'g3w', 'application/vnd.gmx' => 'gmx', 'application/vnd.google-earth.kml+xml' => 'kml', 'application/vnd.google-earth.kmz' => 'kmz', 'application/vnd.grafeq' => 'gqf', 'application/vnd.groove-account' => 'gac', 'application/vnd.groove-help' => 'ghf', 'application/vnd.groove-identity-message' => 'gim', 'application/vnd.groove-injector' => 'grv', 'application/vnd.groove-tool-message' => 'gtm', 'application/vnd.groove-tool-template' => 'tpl', 'application/vnd.groove-vcard' => 'vcg', 'application/vnd.hal+xml' => 'hal', 'application/vnd.handheld-entertainment+xml' => 'zmm', 'application/vnd.hbci' => 'hbci', 'application/vnd.hhe.lesson-player' => 'les', 'application/vnd.hp-hpgl' => 'hpgl', 'application/vnd.hp-hpid' => 'hpid', 'application/vnd.hp-hps' => 'hps', 'application/vnd.hp-jlyt' => 'jlt', 'application/vnd.hp-pcl' => 'pcl', 'application/vnd.hp-pclxl' => 'pclxl', 'application/vnd.hydrostatix.sof-data' => 'sfd-hdstx', 'application/vnd.ibm.minipay' => 'mpy', 'application/vnd.ibm.modcap' => 'afp', 'application/vnd.ibm.rights-management' => 'irm', 'application/vnd.ibm.secure-container' => 'sc', 'application/vnd.iccprofile' => 'icc', 'application/vnd.igloader' => 'igl', 'application/vnd.immervision-ivp' => 'ivp', 'application/vnd.immervision-ivu' => 'ivu', 'application/vnd.insors.igm' => 'igm', 'application/vnd.intercon.formnet' => 'xpw', 'application/vnd.intergeo' => 'i2g', 'application/vnd.intu.qbo' => 'qbo', 'application/vnd.intu.qfx' => 'qfx', 'application/vnd.ipunplugged.rcprofile' => 'rcprofile', 'application/vnd.irepository.package+xml' => 'irp', 'application/vnd.is-xpr' => 'xpr', 'application/vnd.isac.fcs' => 'fcs', 'application/vnd.jam' => 'jam', 'application/vnd.jcp.javame.midlet-rms' => 'rms', 'application/vnd.jisp' => 'jisp', 'application/vnd.joost.joda-archive' => 'joda', 'application/vnd.kahootz' => 'ktz', 'application/vnd.kde.karbon' => 'karbon', 'application/vnd.kde.kchart' => 'chrt', 'application/vnd.kde.kformula' => 'kfo', 'application/vnd.kde.kivio' => 'flw', 'application/vnd.kde.kontour' => 'kon', 'application/vnd.kde.kpresenter' => 'kpr', 'application/vnd.kde.kspread' => 'ksp', 'application/vnd.kde.kword' => 'kwd', 'application/vnd.kenameaapp' => 'htke', 'application/vnd.kidspiration' => 'kia', 'application/vnd.kinar' => 'kne', 'application/vnd.koan' => 'skp', 'application/vnd.kodak-descriptor' => 'sse', 'application/vnd.las.las+xml' => 'lasxml', 'application/vnd.llamagraphics.life-balance.desktop' => 'lbd', 'application/vnd.llamagraphics.life-balance.exchange+xml' => 'lbe', 'application/vnd.lotus-1-2-3' => '123', 'application/vnd.lotus-approach' => 'apr', 'application/vnd.lotus-freelance' => 'pre', 'application/vnd.lotus-notes' => 'nsf', 'application/vnd.lotus-organizer' => 'org', 'application/vnd.lotus-screencam' => 'scm', 'application/vnd.lotus-wordpro' => 'lwp', 'application/vnd.macports.portpkg' => 'portpkg', 'application/vnd.mcd' => 'mcd', 'application/vnd.medcalcdata' => 'mc1', 'application/vnd.mediastation.cdkey' => 'cdkey', 'application/vnd.mfer' => 'mwf', 'application/vnd.mfmp' => 'mfm', 'application/vnd.micrografx.flo' => 'flo', 'application/vnd.micrografx.igx' => 'igx', 'application/vnd.mif' => 'mif', 'application/vnd.mobius.daf' => 'daf', 'application/vnd.mobius.dis' => 'dis', 'application/vnd.mobius.mbk' => 'mbk', 'application/vnd.mobius.mqy' => 'mqy', 'application/vnd.mobius.msl' => 'msl', 'application/vnd.mobius.plc' => 'plc', 'application/vnd.mobius.txf' => 'txf', 'application/vnd.mophun.application' => 'mpn', 'application/vnd.mophun.certificate' => 'mpc', 'application/vnd.mozilla.xul+xml' => 'xul', 'application/vnd.ms-artgalry' => 'cil', 'application/vnd.ms-cab-compressed' => 'cab', 'application/vnd.ms-excel' => 'xls', 'application/vnd.ms-excel.addin.macroenabled.12' => 'xlam', 'application/vnd.ms-excel.sheet.binary.macroenabled.12' => 'xlsb', 'application/vnd.ms-excel.sheet.macroenabled.12' => 'xlsm', 'application/vnd.ms-excel.template.macroenabled.12' => 'xltm', 'application/vnd.ms-fontobject' => 'eot', 'application/vnd.ms-htmlhelp' => 'chm', 'application/vnd.ms-ims' => 'ims', 'application/vnd.ms-lrm' => 'lrm', 'application/vnd.ms-officetheme' => 'thmx', 'application/vnd.ms-pki.seccat' => 'cat', 'application/vnd.ms-pki.stl' => 'stl', 'application/vnd.ms-powerpoint' => 'ppt', 'application/vnd.ms-powerpoint.addin.macroenabled.12' => 'ppam', 'application/vnd.ms-powerpoint.presentation.macroenabled.12' => 'pptm', 'application/vnd.ms-powerpoint.slide.macroenabled.12' => 'sldm', 'application/vnd.ms-powerpoint.slideshow.macroenabled.12' => 'ppsm', 'application/vnd.ms-powerpoint.template.macroenabled.12' => 'potm', 'application/vnd.ms-project' => 'mpp', 'application/vnd.ms-word.document.macroenabled.12' => 'docm', 'application/vnd.ms-word.template.macroenabled.12' => 'dotm', 'application/vnd.ms-works' => 'wps', 'application/vnd.ms-wpl' => 'wpl', 'application/vnd.ms-xpsdocument' => 'xps', 'application/vnd.mseq' => 'mseq', 'application/vnd.musician' => 'mus', 'application/vnd.muvee.style' => 'msty', 'application/vnd.mynfc' => 'taglet', 'application/vnd.neurolanguage.nlu' => 'nlu', 'application/vnd.nitf' => 'ntf', 'application/vnd.noblenet-directory' => 'nnd', 'application/vnd.noblenet-sealer' => 'nns', 'application/vnd.noblenet-web' => 'nnw', 'application/vnd.nokia.n-gage.data' => 'ngdat', 'application/vnd.nokia.n-gage.symbian.install' => 'n-gage', 'application/vnd.nokia.radio-preset' => 'rpst', 'application/vnd.nokia.radio-presets' => 'rpss', 'application/vnd.novadigm.edm' => 'edm', 'application/vnd.novadigm.edx' => 'edx', 'application/vnd.novadigm.ext' => 'ext', 'application/vnd.oasis.opendocument.chart' => 'odc', 'application/vnd.oasis.opendocument.chart-template' => 'otc', 'application/vnd.oasis.opendocument.database' => 'odb', 'application/vnd.oasis.opendocument.formula' => 'odf', 'application/vnd.oasis.opendocument.formula-template' => 'odft', 'application/vnd.oasis.opendocument.graphics' => 'odg', 'application/vnd.oasis.opendocument.graphics-template' => 'otg', 'application/vnd.oasis.opendocument.image' => 'odi', 'application/vnd.oasis.opendocument.image-template' => 'oti', 'application/vnd.oasis.opendocument.presentation' => 'odp', 'application/vnd.oasis.opendocument.presentation-template' => 'otp', 'application/vnd.oasis.opendocument.spreadsheet' => 'ods', 'application/vnd.oasis.opendocument.spreadsheet-template' => 'ots', 'application/vnd.oasis.opendocument.text' => 'odt', 'application/vnd.oasis.opendocument.text-master' => 'odm', 'application/vnd.oasis.opendocument.text-template' => 'ott', 'application/vnd.oasis.opendocument.text-web' => 'oth', 'application/vnd.olpc-sugar' => 'xo', 'application/vnd.oma.dd2+xml' => 'dd2', 'application/vnd.openofficeorg.extension' => 'oxt', 'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx', 'application/vnd.openxmlformats-officedocument.presentationml.slide' => 'sldx', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow' => 'ppsx', 'application/vnd.openxmlformats-officedocument.presentationml.template' => 'potx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template' => 'xltx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template' => 'dotx', 'application/vnd.osgeo.mapguide.package' => 'mgp', 'application/vnd.osgi.dp' => 'dp', 'application/vnd.osgi.subsystem' => 'esa', 'application/vnd.palm' => 'pdb', 'application/vnd.pawaafile' => 'paw', 'application/vnd.pg.format' => 'str', 'application/vnd.pg.osasli' => 'ei6', 'application/vnd.picsel' => 'efif', 'application/vnd.pmi.widget' => 'wg', 'application/vnd.pocketlearn' => 'plf', 'application/vnd.powerbuilder6' => 'pbd', 'application/vnd.previewsystems.box' => 'box', 'application/vnd.proteus.magazine' => 'mgz', 'application/vnd.publishare-delta-tree' => 'qps', 'application/vnd.pvi.ptid1' => 'ptid', 'application/vnd.quark.quarkxpress' => 'qxd', 'application/vnd.realvnc.bed' => 'bed', 'application/vnd.recordare.musicxml' => 'mxl', 'application/vnd.recordare.musicxml+xml' => 'musicxml', 'application/vnd.rig.cryptonote' => 'cryptonote', 'application/vnd.rim.cod' => 'cod', 'application/vnd.rn-realmedia' => 'rm', 'application/vnd.rn-realmedia-vbr' => 'rmvb', 'application/vnd.route66.link66+xml' => 'link66', 'application/vnd.sailingtracker.track' => 'st', 'application/vnd.seemail' => 'see', 'application/vnd.sema' => 'sema', 'application/vnd.semd' => 'semd', 'application/vnd.semf' => 'semf', 'application/vnd.shana.informed.formdata' => 'ifm', 'application/vnd.shana.informed.formtemplate' => 'itp', 'application/vnd.shana.informed.interchange' => 'iif', 'application/vnd.shana.informed.package' => 'ipk', 'application/vnd.simtech-mindmapper' => 'twd', 'application/vnd.smaf' => 'mmf', 'application/vnd.smart.teacher' => 'teacher', 'application/vnd.solent.sdkm+xml' => 'sdkm', 'application/vnd.spotfire.dxp' => 'dxp', 'application/vnd.spotfire.sfs' => 'sfs', 'application/vnd.stardivision.calc' => 'sdc', 'application/vnd.stardivision.draw' => 'sda', 'application/vnd.stardivision.impress' => 'sdd', 'application/vnd.stardivision.math' => 'smf', 'application/vnd.stardivision.writer' => 'sdw', 'application/vnd.stardivision.writer-global' => 'sgl', 'application/vnd.stepmania.package' => 'smzip', 'application/vnd.stepmania.stepchart' => 'sm', 'application/vnd.sun.xml.calc' => 'sxc', 'application/vnd.sun.xml.calc.template' => 'stc', 'application/vnd.sun.xml.draw' => 'sxd', 'application/vnd.sun.xml.draw.template' => 'std', 'application/vnd.sun.xml.impress' => 'sxi', 'application/vnd.sun.xml.impress.template' => 'sti', 'application/vnd.sun.xml.math' => 'sxm', 'application/vnd.sun.xml.writer' => 'sxw', 'application/vnd.sun.xml.writer.global' => 'sxg', 'application/vnd.sun.xml.writer.template' => 'stw', 'application/vnd.sus-calendar' => 'sus', 'application/vnd.svd' => 'svd', 'application/vnd.symbian.install' => 'sis', 'application/vnd.syncml+xml' => 'xsm', 'application/vnd.syncml.dm+wbxml' => 'bdm', 'application/vnd.syncml.dm+xml' => 'xdm', 'application/vnd.tao.intent-module-archive' => 'tao', 'application/vnd.tcpdump.pcap' => 'pcap', 'application/vnd.tmobile-livetv' => 'tmo', 'application/vnd.trid.tpt' => 'tpt', 'application/vnd.triscape.mxs' => 'mxs', 'application/vnd.trueapp' => 'tra', 'application/vnd.ufdl' => 'ufd', 'application/vnd.uiq.theme' => 'utz', 'application/vnd.umajin' => 'umj', 'application/vnd.unity' => 'unityweb', 'application/vnd.uoml+xml' => 'uoml', 'application/vnd.vcx' => 'vcx', 'application/vnd.visio' => 'vsd', 'application/vnd.visionary' => 'vis', 'application/vnd.vsf' => 'vsf', 'application/vnd.wap.wbxml' => 'wbxml', 'application/vnd.wap.wmlc' => 'wmlc', 'application/vnd.wap.wmlscriptc' => 'wmlsc', 'application/vnd.webturbo' => 'wtb', 'application/vnd.wolfram.player' => 'nbp', 'application/vnd.wordperfect' => 'wpd', 'application/vnd.wqd' => 'wqd', 'application/vnd.wt.stf' => 'stf', 'application/vnd.xara' => 'xar', 'application/vnd.xfdl' => 'xfdl', 'application/vnd.yamaha.hv-dic' => 'hvd', 'application/vnd.yamaha.hv-script' => 'hvs', 'application/vnd.yamaha.hv-voice' => 'hvp', 'application/vnd.yamaha.openscoreformat' => 'osf', 'application/vnd.yamaha.openscoreformat.osfpvg+xml' => 'osfpvg', 'application/vnd.yamaha.smaf-audio' => 'saf', 'application/vnd.yamaha.smaf-phrase' => 'spf', 'application/vnd.yellowriver-custom-menu' => 'cmp', 'application/vnd.zul' => 'zir', 'application/vnd.zzazz.deck+xml' => 'zaz', 'application/voicexml+xml' => 'vxml', 'application/widget' => 'wgt', 'application/winhlp' => 'hlp', 'application/wsdl+xml' => 'wsdl', 'application/wspolicy+xml' => 'wspolicy', 'application/x-7z-compressed' => '7z', 'application/x-abiword' => 'abw', 'application/x-ace-compressed' => 'ace', 'application/x-apple-diskimage' => 'dmg', 'application/x-authorware-bin' => 'aab', 'application/x-authorware-map' => 'aam', 'application/x-authorware-seg' => 'aas', 'application/x-bcpio' => 'bcpio', 'application/x-bittorrent' => 'torrent', 'application/x-blorb' => 'blb', 'application/x-bzip' => 'bz', 'application/x-bzip2' => 'bz2', 'application/x-cbr' => 'cbr', 'application/x-cdlink' => 'vcd', 'application/x-cfs-compressed' => 'cfs', 'application/x-chat' => 'chat', 'application/x-chess-pgn' => 'pgn', 'application/x-conference' => 'nsc', 'application/x-cpio' => 'cpio', 'application/x-csh' => 'csh', 'application/x-debian-package' => 'deb', 'application/x-dgc-compressed' => 'dgc', 'application/x-director' => 'dir', 'application/x-doom' => 'wad', 'application/x-dtbncx+xml' => 'ncx', 'application/x-dtbook+xml' => 'dtb', 'application/x-dtbresource+xml' => 'res', 'application/x-dvi' => 'dvi', 'application/x-envoy' => 'evy', 'application/x-eva' => 'eva', 'application/x-font-bdf' => 'bdf', 'application/x-font-ghostscript' => 'gsf', 'application/x-font-linux-psf' => 'psf', 'application/x-font-otf' => 'otf', 'application/x-font-pcf' => 'pcf', 'application/x-font-snf' => 'snf', 'application/x-font-ttf' => 'ttf', 'application/x-font-type1' => 'pfa', 'application/x-font-woff' => 'woff', 'application/x-freearc' => 'arc', 'application/x-futuresplash' => 'spl', 'application/x-gca-compressed' => 'gca', 'application/x-glulx' => 'ulx', 'application/x-gnumeric' => 'gnumeric', 'application/x-gramps-xml' => 'gramps', 'application/x-gtar' => 'gtar', 'application/x-hdf' => 'hdf', 'application/x-install-instructions' => 'install', 'application/x-iso9660-image' => 'iso', 'application/x-java-jnlp-file' => 'jnlp', 'application/x-latex' => 'latex', 'application/x-lzh-compressed' => 'lzh', 'application/x-mie' => 'mie', 'application/x-mobipocket-ebook' => 'prc', 'application/x-ms-application' => 'application', 'application/x-ms-shortcut' => 'lnk', 'application/x-ms-wmd' => 'wmd', 'application/x-ms-wmz' => 'wmz', 'application/x-ms-xbap' => 'xbap', 'application/x-msaccess' => 'mdb', 'application/x-msbinder' => 'obd', 'application/x-mscardfile' => 'crd', 'application/x-msclip' => 'clp', 'application/x-msdownload' => 'exe', 'application/x-msmediaview' => 'mvb', 'application/x-msmetafile' => 'wmf', 'application/x-msmoney' => 'mny', 'application/x-mspublisher' => 'pub', 'application/x-msschedule' => 'scd', 'application/x-msterminal' => 'trm', 'application/x-mswrite' => 'wri', 'application/x-netcdf' => 'nc', 'application/x-nzb' => 'nzb', 'application/x-pkcs12' => 'p12', 'application/x-pkcs7-certificates' => 'p7b', 'application/x-pkcs7-certreqresp' => 'p7r', 'application/x-rar-compressed' => 'rar', 'application/x-rar' => 'rar', 'application/x-research-info-systems' => 'ris', 'application/x-sh' => 'sh', 'application/x-shar' => 'shar', 'application/x-shockwave-flash' => 'swf', 'application/x-silverlight-app' => 'xap', 'application/x-sql' => 'sql', 'application/x-stuffit' => 'sit', 'application/x-stuffitx' => 'sitx', 'application/x-subrip' => 'srt', 'application/x-sv4cpio' => 'sv4cpio', 'application/x-sv4crc' => 'sv4crc', 'application/x-t3vm-image' => 't3', 'application/x-tads' => 'gam', 'application/x-tar' => 'tar', 'application/x-tcl' => 'tcl', 'application/x-tex' => 'tex', 'application/x-tex-tfm' => 'tfm', 'application/x-texinfo' => 'texinfo', 'application/x-tgif' => 'obj', 'application/x-ustar' => 'ustar', 'application/x-wais-source' => 'src', 'application/x-x509-ca-cert' => 'der', 'application/x-xfig' => 'fig', 'application/x-xliff+xml' => 'xlf', 'application/x-xpinstall' => 'xpi', 'application/x-xz' => 'xz', 'application/x-zmachine' => 'z1', 'application/xaml+xml' => 'xaml', 'application/xcap-diff+xml' => 'xdf', 'application/xenc+xml' => 'xenc', 'application/xhtml+xml' => 'xhtml', 'application/xml' => 'xml', 'application/xml-dtd' => 'dtd', 'application/xop+xml' => 'xop', 'application/xproc+xml' => 'xpl', 'application/xslt+xml' => 'xslt', 'application/xspf+xml' => 'xspf', 'application/xv+xml' => 'mxml', 'application/yang' => 'yang', 'application/yin+xml' => 'yin', 'application/zip' => 'zip', 'audio/adpcm' => 'adp', 'audio/basic' => 'au', 'audio/midi' => 'mid', 'audio/mp4' => 'mp4a', 'audio/mpeg' => 'mp3', 'audio/ogg' => 'oga', 'audio/s3m' => 's3m', 'audio/silk' => 'sil', 'audio/vnd.dece.audio' => 'uva', 'audio/vnd.digital-winds' => 'eol', 'audio/vnd.dra' => 'dra', 'audio/vnd.dts' => 'dts', 'audio/vnd.dts.hd' => 'dtshd', 'audio/vnd.lucent.voice' => 'lvp', 'audio/vnd.ms-playready.media.pya' => 'pya', 'audio/vnd.nuera.ecelp4800' => 'ecelp4800', 'audio/vnd.nuera.ecelp7470' => 'ecelp7470', 'audio/vnd.nuera.ecelp9600' => 'ecelp9600', 'audio/vnd.rip' => 'rip', 'audio/webm' => 'weba', 'audio/x-aac' => 'aac', 'audio/x-aiff' => 'aif', 'audio/x-caf' => 'caf', 'audio/x-flac' => 'flac', 'audio/x-matroska' => 'mka', 'audio/x-mpegurl' => 'm3u', 'audio/x-ms-wax' => 'wax', 'audio/x-ms-wma' => 'wma', 'audio/x-pn-realaudio' => 'ram', 'audio/x-pn-realaudio-plugin' => 'rmp', 'audio/x-wav' => 'wav', 'audio/wav' => 'wav', 'audio/xm' => 'xm', 'chemical/x-cdx' => 'cdx', 'chemical/x-cif' => 'cif', 'chemical/x-cmdf' => 'cmdf', 'chemical/x-cml' => 'cml', 'chemical/x-csml' => 'csml', 'chemical/x-xyz' => 'xyz', 'image/bmp' => 'bmp', 'image/x-ms-bmp' => 'bmp', 'image/cgm' => 'cgm', 'image/g3fax' => 'g3', 'image/gif' => 'gif', 'image/ief' => 'ief', 'image/jpeg' => 'jpeg', 'image/pjpeg' => 'jpeg', 'image/ktx' => 'ktx', 'image/png' => 'png', 'image/prs.btif' => 'btif', 'image/sgi' => 'sgi', 'image/svg+xml' => 'svg', 'image/tiff' => 'tiff', 'image/vnd.adobe.photoshop' => 'psd', 'image/vnd.dece.graphic' => 'uvi', 'image/vnd.dvb.subtitle' => 'sub', 'image/vnd.djvu' => 'djvu', 'image/vnd.dwg' => 'dwg', 'image/vnd.dxf' => 'dxf', 'image/vnd.fastbidsheet' => 'fbs', 'image/vnd.fpx' => 'fpx', 'image/vnd.fst' => 'fst', 'image/vnd.fujixerox.edmics-mmr' => 'mmr', 'image/vnd.fujixerox.edmics-rlc' => 'rlc', 'image/vnd.ms-modi' => 'mdi', 'image/vnd.ms-photo' => 'wdp', 'image/vnd.net-fpx' => 'npx', 'image/vnd.wap.wbmp' => 'wbmp', 'image/vnd.xiff' => 'xif', 'image/webp' => 'webp', 'image/x-3ds' => '3ds', 'image/x-cmu-raster' => 'ras', 'image/x-cmx' => 'cmx', 'image/x-freehand' => 'fh', 'image/x-icon' => 'ico', 'image/x-mrsid-image' => 'sid', 'image/x-pcx' => 'pcx', 'image/x-pict' => 'pic', 'image/x-portable-anymap' => 'pnm', 'image/x-portable-bitmap' => 'pbm', 'image/x-portable-graymap' => 'pgm', 'image/x-portable-pixmap' => 'ppm', 'image/x-rgb' => 'rgb', 'image/x-tga' => 'tga', 'image/x-xbitmap' => 'xbm', 'image/x-xpixmap' => 'xpm', 'image/x-xwindowdump' => 'xwd', 'message/rfc822' => 'eml', 'model/iges' => 'igs', 'model/mesh' => 'msh', 'model/vnd.collada+xml' => 'dae', 'model/vnd.dwf' => 'dwf', 'model/vnd.gdl' => 'gdl', 'model/vnd.gtw' => 'gtw', 'model/vnd.mts' => 'mts', 'model/vnd.vtu' => 'vtu', 'model/vrml' => 'wrl', 'model/x3d+binary' => 'x3db', 'model/x3d+vrml' => 'x3dv', 'model/x3d+xml' => 'x3d', 'text/cache-manifest' => 'appcache', 'text/calendar' => 'ics', 'text/css' => 'css', 'text/csv' => 'csv', 'text/html' => 'html', 'text/n3' => 'n3', 'text/plain' => 'txt', 'text/prs.lines.tag' => 'dsc', 'text/richtext' => 'rtx', 'text/rtf' => 'rtf', 'text/sgml' => 'sgml', 'text/tab-separated-values' => 'tsv', 'text/troff' => 't', 'text/turtle' => 'ttl', 'text/uri-list' => 'uri', 'text/vcard' => 'vcard', 'text/vnd.curl' => 'curl', 'text/vnd.curl.dcurl' => 'dcurl', 'text/vnd.curl.scurl' => 'scurl', 'text/vnd.curl.mcurl' => 'mcurl', 'text/vnd.dvb.subtitle' => 'sub', 'text/vnd.fly' => 'fly', 'text/vnd.fmi.flexstor' => 'flx', 'text/vnd.graphviz' => 'gv', 'text/vnd.in3d.3dml' => '3dml', 'text/vnd.in3d.spot' => 'spot', 'text/vnd.sun.j2me.app-descriptor' => 'jad', 'text/vnd.wap.wml' => 'wml', 'text/vnd.wap.wmlscript' => 'wmls', 'text/vtt' => 'vtt', 'text/x-asm' => 's', 'text/x-c' => 'c', 'text/x-fortran' => 'f', 'text/x-pascal' => 'p', 'text/x-java-source' => 'java', 'text/x-opml' => 'opml', 'text/x-nfo' => 'nfo', 'text/x-setext' => 'etx', 'text/x-sfv' => 'sfv', 'text/x-uuencode' => 'uu', 'text/x-vcalendar' => 'vcs', 'text/x-vcard' => 'vcf', 'video/3gpp' => '3gp', 'video/3gpp2' => '3g2', 'video/h261' => 'h261', 'video/h263' => 'h263', 'video/h264' => 'h264', 'video/jpeg' => 'jpgv', 'video/jpm' => 'jpm', 'video/mj2' => 'mj2', 'video/mp4' => 'mp4', 'video/mpeg' => 'mpeg', 'video/ogg' => 'ogv', 'video/quicktime' => 'qt', 'video/vnd.dece.hd' => 'uvh', 'video/vnd.dece.mobile' => 'uvm', 'video/vnd.dece.pd' => 'uvp', 'video/vnd.dece.sd' => 'uvs', 'video/vnd.dece.video' => 'uvv', 'video/vnd.dvb.file' => 'dvb', 'video/vnd.fvt' => 'fvt', 'video/vnd.mpegurl' => 'mxu', 'video/vnd.ms-playready.media.pyv' => 'pyv', 'video/vnd.uvvu.mp4' => 'uvu', 'video/vnd.vivo' => 'viv', 'video/webm' => 'webm', 'video/x-f4v' => 'f4v', 'video/x-fli' => 'fli', 'video/x-flv' => 'flv', 'video/x-m4v' => 'm4v', 'video/x-matroska' => 'mkv', 'video/x-mng' => 'mng', 'video/x-ms-asf' => 'asf', 'video/x-ms-vob' => 'vob', 'video/x-ms-wm' => 'wm', 'video/x-ms-wmv' => 'wmv', 'video/x-ms-wmx' => 'wmx', 'video/x-ms-wvx' => 'wvx', 'video/x-msvideo' => 'avi', 'video/avi' => 'avi', 'video/x-sgi-movie' => 'movie', 'video/x-smv' => 'smv', 'x-conference/x-cooltalk' => 'ice'];
        /**
         * HTTP File instantiator.
         *
         * @param $path
         * @param $originalName
         * @param null $mimeType
         * @param null $size
         * @param null $error
         */
        public function __construct($path, $originalName, $mimeType = null, $size = null, $error = null)
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\File\File
         *
         * Returns locale independent base name of the given path.
         *
         * @param string $name The new file name
         *
         * @return string containing
         */
        public function getName($name)
        {
        }
        /**
         * Get the file upload error.
         *
         * @return int
         */
        public function getError()
        {
        }
        /**
         * Returns whether the file was uploaded successfully.
         *
         * @return bool True if the file has been uploaded with HTTP and no error occurred
         */
        public function isValid()
        {
        }
        /**
         * Returns the original file extension.
         *
         * It is extracted from the original file name that was uploaded.
         * Then it should not be considered as a safe value.
         *
         * @return string The extension
         */
        public function getClientOriginalExtension()
        {
        }
        /**
         * Take an educated guess of the file's extension.
         *
         * @return mixed|null
         */
        public function guessExtension()
        {
        }
        /**
         * Take an educated guess of the file's mime type.
         *
         * @return string
         */
        public function getMimeType()
        {
        }
        /**
         * Get original HTTP file array
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Returns the contents of the file.
         *
         * @return string the contents of the file
         *
         * @throws \RuntimeException
         */
        public function getContents()
        {
        }
    }
    class Request
    {
        /**
         * Handles HTTP files.
         */
        use \FluentForm\Framework\Request\FileHandler;
        protected $app = null;
        protected $headers = array();
        protected $server = array();
        protected $cookie = array();
        protected $json = array();
        protected $get = array();
        protected $post = array();
        protected $files = array();
        protected $request = array();
        public function __construct($app, $get, $post, $files)
        {
        }
        /**
         * Clean up the slashes from GET/POST added by WP
         * using "wp_magic_quotes" function in load.php.
         * 
         * @param  array $data
         * @return array
         */
        public function clean($data)
        {
        }
        /**
         * Variable exists
         * @param  string $key
         * @return bool
         */
        public function exists($key)
        {
        }
        /**
         * Variable exists and has truthy value
         * @param  string $key
         * @return bool
         */
        public function has($key)
        {
        }
        public function set($key, $value)
        {
        }
        public function all()
        {
        }
        public function get($key = null, $default = null)
        {
        }
        /**
         * Get the files from the request.
         *
         * @return array
         */
        public function files()
        {
        }
        public function query($key = null, $default = null)
        {
        }
        public function post($key = null, $default = null)
        {
        }
        public function only($args)
        {
        }
        public function except($args)
        {
        }
        public function merge(array $data = [])
        {
        }
        /**
         * Get user ip address
         * @return string
         */
        public function getIp()
        {
        }
        public function server($key = null, $default = null)
        {
        }
        public function header($key = null, $default = null)
        {
        }
        public function cookie($key = null, $default = null)
        {
        }
        /**
         * Taken and modified from Symfony
         */
        public function setHeaders()
        {
        }
    }
    class RequestProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booted()
        {
        }
    }
}

namespace FluentForm\Framework\Exception {
    class ExceptionHandler
    {
        const APPEND_TO_LOG_FILE = 3;
        /**
         * framework\App\Application
         * @var Object
         */
        protected $app = null;
        public function __construct($app)
        {
        }
        public function registerHandlers()
        {
        }
        public function handleError($severity, $message, $file = '', $line = 0)
        {
        }
        public function handleException($e)
        {
        }
        public function handleShutdown()
        {
        }
        public function report($e)
        {
        }
        public function render($e)
        {
        }
        protected function isFatal($type)
        {
        }
    }
    class UnResolveableEntityException extends \Exception
    {
        // ...
    }
}

namespace FluentForm\Framework\Helpers {
    class ArrayHelper
    {
        /**
         * Taken from Illuminate\Support\Arr (Laravel Framework)
         */
        /**
         * Check if an item or items exist in an array using "dot" notation.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string|array  $keys
         * @return bool
         */
        public static function has($array, $keys)
        {
        }
        /**
         * Get an item from an array using "dot" notation.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string  $key
         * @param  mixed   $default
         * @return mixed
         */
        public static function get($array, $key, $default = null)
        {
        }
        /**
         * Set an array item to a given value using "dot" notation.
         *
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param  array   $array
         * @param  string  $key
         * @param  mixed   $value
         * @return array
         */
        public static function set(&$array, $key, $value)
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
         * Get all of the given array except for a specified array of items.
         *
         * @param  array  $array
         * @param  array|string  $keys
         * @return array
         */
        public static function except($array, $keys)
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
         * Determine whether the given value is array accessible.
         *
         * @param  mixed  $value
         * @return bool
         */
        public static function accessible($value)
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
         * Return the default value of the given value.
         *
         * @param  mixed  $value
         * @return mixed
         */
        public static function value($value)
        {
        }
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @param array $array
         * @param string $prepend
         *
         * @return array
         */
        public static function dot($array, $prepend = '')
        {
        }
        public static function isTrue($array, $key)
        {
        }
    }
}

namespace FluentForm {
    class App extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'app';
    }
    class Config extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'config';
    }
    class Request extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'request';
    }
    class View extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'view';
    }
    class AdminNotice extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'adminNotice';
    }
}

namespace Box\Spout\Autoloader {
    /**
     * @var string $srcBaseDirectory
     * Full path to "src/Spout" which is what we want "Box\Spout" to map to.
     */
    $srcBaseDirectory = dirname(dirname(__FILE__));
}

namespace {
    \define('FLUENTFORM_DIR_PATH', \plugin_dir_path(__FILE__));
    \define('FLUENTFORM_HAS_NIA', \true);
    function fluentform_after_submission_api_response_success($form, $entryId, $data, $feed, $res, $msg = '')
    {
    }
    function fluentform_after_submission_api_response_failed($form, $entryId, $data, $feed, $res, $msg = '')
    {
    }
    function wpFluentForm($key = \null)
    {
    }
    function wpFluentFormAddComponent(\FluentForm\App\Modules\Component\BaseComponent $component)
    {
    }
    function dd()
    {
    }
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     *
     * @return string
     * @throws \Exception
     */
    function fluentformMix($path, $manifestDirectory = '')
    {
    }
    /**
     * Sanitize form inputs recursively.
     *
     * @param $input
     *
     * @return string $input
     */
    function fluentFormSanitizer($input, $attribute = \null, $fields = [])
    {
    }
    function fluentFormEditorShortCodes()
    {
    }
    function fluentFormGetAllEditorShortCodes($form)
    {
    }
    /**
     * Recursively implode a multi-dimentional array
     * @param string $glue
     * @param array $array
     * @return string
     */
    function fluentImplodeRecursive($glue, array $array)
    {
    }
    function fluentform_get_active_theme_slug()
    {
    }
    function getFluentFormCountryList()
    {
    }
    function fluentFormWasSubmitted($action = 'fluentform_submit')
    {
    }
    function isWpAsyncRequest($action)
    {
    }
    function fluentFormIsHandlingSubmission()
    {
    }
    function fluentform_mb_strpos($haystack, $needle)
    {
    }
    function fluentFormHandleScheduledTasks()
    {
    }
    function fluentFormHandleScheduledEmailReport()
    {
    }
    function fluentform_upgrade_url()
    {
    }
    function fluentform_integrations_url()
    {
    }
    function fluentFormApi($module = 'forms')
    {
    }
    function fluentFormGetRandomPhoto()
    {
    }
    function fluentFormRender($atts)
    {
    }
    /**
     * Print internal content (not user input) without escaping.
     */
    function fluentFormPrintUnescapedInternalString($string)
    {
    }
    function fluentform_options_sanitize($options)
    {
    }
    function fluentform_sanitize_html($html)
    {
    }
    /**
     * Sanitize inputs recursively.
     *
     * @param array $input
     * @param array $sanitizeMap
     * @return array $input
     */
    function fluentform_backend_sanitizer($array, $sanitizeMap = [])
    {
    }
    \define('FLUENT_CONVERSATIONAL_FORM', \true);
    \define('FLUENT_CONVERSATIONAL_FORM_VERSION', '1.0.0');
    \define('FLUENT_CONVERSATIONAL_FORM_DIR_URL', \plugin_dir_url(__FILE__));
    \define('FLUENT_CONVERSATIONAL_FORM_DIR_PATH', \plugin_dir_path(__FILE__));
    function fluentValidator($data = [], $rules = [], $messages = [])
    {
    }
    /**
     * @return \WpFluent\QueryBuilder\QueryBuilderHandler
     */
    function wpFluent()
    {
    }
}
