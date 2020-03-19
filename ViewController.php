<?php declare(strict_types=1);
/**
 * Base/Simple view class
 */

class Template
{
    // Folder with templates
    /**
     * base folder with templates
     */
    private $templatesFolder;

    function __construct(string $templatesFolder = 'template')
    {
        // TODO Hmmm, think it's a bullshit
        $this->templatesFolder = $templatesFolder ?? 'template';
    }

    // Method to change templates folder
    /**
     * Change base template folder
     * @param string $newBaseTemplateFolder
     * @return void
     */
    protected function changeTemplateFolder (string $newBaseTemplateFolder):void
    {
        $this->templatesFolder = $newBaseTemplateFolder;
    }
    
    /**
     * Check is template file exists and return full path
     * @param string $templateName
     * @return string
     */
    protected function getTemplateToView (string $templateName):string 
    {
        // TODO refactor error result, function should return string
        // get template file name
        // get templates folder name
        // check is file exists
        // return full path to template file
        if ($templateName) {
            $templateFile = __DIR__ . "{$this->templatesFolder}/{$templateName}.php";
            if (file_exists($templateFile)) {
                return file_exists($templateFile) ? $templateFile : false;
            }
        }
        return false;
    }


    // Prepare template and data to show
    
    // Return view
}
