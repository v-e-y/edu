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

    // Template to view/show. Find and return

    // Prepare template and data to show
    
    // Return view
}
