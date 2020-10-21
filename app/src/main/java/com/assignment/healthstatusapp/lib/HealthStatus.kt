package com.assignment.healthstatusapp.lib

import android.content.Context
import android.media.MediaPlayer
import com.assignment.healthstatusapp.R
import com.assignment.healthstatusapp.ScoreViewModel
import com.assignment.healthstatusapp.lib.interfaces.HealthStatusUpdateListener

class HealthStatus(context:Context) {
    private var healthScore:Int = 10
    private var color:Int = R.color.colorHigh
    private lateinit var mHealthStatusUpdateListener: HealthStatusUpdateListener
    private val media = MediaPlayer.create(context, R.raw.nose_blow_sound)

    fun updateSneeze(){
        healthScore--
        if(healthScore<0)
            healthScore = 0
        updateHealthStatusListener()
    }
    fun updateBlowNose(){
        media.start()
    }
    fun updateTakeMedication(){
        healthScore += 2
        if(healthScore>10)
            healthScore=10
        updateHealthStatusListener()
    }
    fun setHealthStatusUpdateListener(mHealthStatusUpdateListener:HealthStatusUpdateListener){
        this.mHealthStatusUpdateListener = mHealthStatusUpdateListener
    }
    fun setScore(scoreV:ScoreViewModel){
        this.healthScore = scoreV.score
        color = scoreV.color
        updateHealthStatusListener()
    }
    fun getScore(): ScoreViewModel {
        val svm = ScoreViewModel()
        svm.score = healthScore
        svm.color = color

        return svm
    }
    private fun updateHealthStatusListener(){
        when(healthScore){
            in 0..5 -> color = R.color.colorLow
            in 6..7 -> color = R.color.colorMedium
            else -> color = R.color.colorHigh
        }
        if(::mHealthStatusUpdateListener.isInitialized){
            mHealthStatusUpdateListener.onUpdate(healthScore,color)
        }
    }

}