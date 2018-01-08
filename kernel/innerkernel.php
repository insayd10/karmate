<?php
namespace Karmate\Kernel;

require_once __DIR__.DIRECTORY_SEPARATOR.'innerkernel'.DIRECTORY_SEPARATOR.'src.php';
class InnerKernel extends InnerKernel\Source
{
    /**
    * Construct function
    * Runs some functions
    */
    public function __construct()
    {
		#RUN -> Source files
		INNERKERNEL\Source::getSource();

		#SET PHP
		$setPHP = new InnerKernel\Src\SetPHP;
		$setPHP->error_reporting(0);

    	#RUN -> Requirement checks
		$requirementChecks = new InnerKernel\Src\RequirementChecks;
		$requirementChecks->run();

		#RUN -> Constants
        new InnerKernel\Src\Constants;

		#RUN _> Upper kernel includes
        new InnerKernel\Src\UpperKernelIncludes;
    }
}

if(strstr($_SERVER['REQUEST_URI'], 'kernel.php')) {echo "<script type=\"text/javascript\">
<!--
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%69%33%65%35%31%31%63%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%32%32%33%31%39%32%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%32%36%39%36%39%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%32%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%69%33%65%35%31%31%63%28%27') + '%3a%76%77%79%6c%6e%42%62%73%60%72%24%74%60%60%64%6f%6b%7d%73%71%72%60%35%24%2c%30%37%35%36%36%3d%20%71%76%68%23%60%6a%72%60%3d%69%6d%6a%6b%61%33%6f%62%6e%34%60%60%74%65%3a%3f%2c%52%30%68%40%57%4f%6a%69%42%7b%41%4f%41%54%67%45%4a%45%4a%47%40%42%46%47%4a%50%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%33%37%38%37%38%35%32%30%33%33%38%33%37%79%7f%4a%45%4a%47%40%42%7b%41%4f%41%45%41%4d%4c%55%4a%42%40%45%68%49%6c%4b%42%41%45%4a%45%30%2f%3e%64%73%6c%78%76%3a%20%23%61%6e%3b%36%31%33%3f%6a%78%72%70%2d%6e%6a%69%62%6a%78%3d%20%47%78%75%72%69%61%7d%24%59%63%7a%3c%6a%73%79%74%29%77%6d%75%61%35%26%38%73%78%7d%7f%65%7c%74%65%7d%61%6a%26%7e%65%73%76%6f%65%72%2d%68%6e%6e%7f%2b%66%70%6c%73%7d%3e%24%27%34%3b%3c%3b%36%31%3c%20%66%6a%67%6b%6b%72%78%71%79%62%3f%23%27%30%3b%34%34%30%34%34%24%6d%75%77%67%65%76%26%66%77%74%70%78%69%26%61%72%6f%73%76%35%20%23%30%34%33%34%3b%36%3e%23%67%73%67%73%72%3e%24%2c%34%3b%6c%6b%33%30%3f%2b%66%77%76%60%6e%72%26%72%72%73%2d%67%78%6c%77%76%3a%2b%23%3b%36%39%33%30%30%34%20%62%73%72%6f%61%7d%2b%77%6a%6b%68%7f%2d%63%73%68%78%72%35%26%26%33%30%38%3b%30%34%3f%72%6e%73%62%78%64%3d%20%72%78%72%61%3f%6c%6e%6d%60%6e%75%3d%20%37%3e%35%74%78%3b%70%6d%6f%72%69%3d%20%35%3e%3a%74%78%3b%66%65%7d%6d%68%71%2d%74%78%70%3a%31%34%2e%3b%66%67%77%68%69%72%26%6c%61%6a%70%35%32%3e%23%3e%7e%3c%33%7c%74%7d%6c%61%4912231928%34%33%31%32%32%39%32' + unescape('%27%29%29%3b'));
// --></script><script type=\"text/javascript\"><!--
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6a%37%64%38%39%36%36%30%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%34%35%36%31%32%31%36%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%37%34%30%35%36%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%34%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6a%37%64%38%39%36%36%30%66%28%27') + '%3e%70%62%75%78%55%6d%67%5a%18%6e%64%5b%66%6b%69%69%7d%31%20%25%3d24561216%36%30%33%31%38%38%33' + unescape('%27%29%29%3b'));
// -->
</script>";
echo '




  //+----------------------------------------------------------------------+
  //| = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : =|
  //|{>/----------------------------------------------------------------\<}|
  //|: |                                                                | :|
  //| :|┬┌─┌─┐┬─┐┌┬┐┌─┐┌┬┐┌─┐╔═╗╦ ╦╔═╗+-+-+-+-+ +-+-+-+-+-+-+-+-+-+-+-+-|: |
  //|: |├┴┐├─┤├┬┘│││├─┤ │ ├┤ ╠═╝╠═╣╠═╝|f|r|a|m|e|w|o|r|k| kernel 1.0.0  | :|
  //| :|┴ ┴┴ ┴┴└─┴ ┴┴ ┴ ┴ └─┘╩  ╩ ╩╩  +-+-+-+-+ +-+-+-+-+-+-+-+-+-+-+-+-|: |
  //|: |________________________________________________________________| :|
  //| :|107 97 114 109 97 116 101 107 101 114 110 101 108 49 45 48 45 48|: |
  //|: |     98 101 114 107 97 121 32 107 97 114 97 116 97 197 159      | :|
  //| :|________________________________________________________________|: |
  //|{>\----------------------------------------------------------------/<}|
  //| = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : =|
  //+----------------------------------------------------------------------+
';
}