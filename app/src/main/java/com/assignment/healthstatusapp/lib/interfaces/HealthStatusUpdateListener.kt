package com.assignment.healthstatusapp.lib.interfaces

interface HealthStatusUpdateListener {
    fun onUpdate(healthScore:Int,color:Int)
}