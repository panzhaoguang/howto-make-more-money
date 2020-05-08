<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function build()
    {
        $this->_exec("gitbook build . docs");
    }

    public function up($m = 'update')
    {
        $this->_exec("git pull && git add . && git commit -m '" . $m . "' && git push");
    }
}
