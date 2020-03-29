<?php declare(strict_types=1);
// version 0.0.1

/**
 * Base/Simple view class
 */

class Template
{
    
    /**
     * base folder with templates
     */
    private $templatesFolder;

    function __construct(string $templatesFolder = 'template')
    {
        // TODO Hmmm, think it's a bullshit
        $this->templatesFolder = $templatesFolder ?? 'template';
    }

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
        if ($templateName) {
            $templateFile = __DIR__ . "{$this->templatesFolder}/{$templateName}.php";
            if (file_exists($templateFile)) {
                return file_exists($templateFile) ? $templateFile : false;
            }
        }
        return false;
    }


    // Prepare template and data to show
    protected function render (string $templateToRender, array $dataToView)
    {
        $templateToRender = $this->getTemplateToView($templateToRender);
        if ($templateToRender) {
            return $renderOutput = $this->renderTemplate($templateToRender, $dataToView);
        } else {
            // TODO refactor
            return false;
        }
    }
    
    // Return view
    protected function renderTemplate (/*string $templateToRender, array $dataToView*/)
    {
        ob_start();
        foreach (func_get_args()[1] as $key => $value) {
            ${$key} = $value;
        }
        include func_get_args()[0];
        return ob_get_clean();
    }
}
