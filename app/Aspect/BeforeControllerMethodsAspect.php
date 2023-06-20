<?php

namespace App\Aspects;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class BeforeControllerMethodsAspect implements Aspect
{
    /**
     * Method executed before all controller method calls
     *
     * @param MethodInvocation $invocation
     * @Before("execution(public App\Http\Controllers\*Controller->*(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        // Code to be executed before each controller method call
        // For example, you can log some information or perform certain actions

        // Log the controller method being called
        $className = get_class($invocation->getThis());
        $methodName = $invocation->getMethod()->getName();
        \Log::info("Calling controller method: $className::$methodName");
    }
}
