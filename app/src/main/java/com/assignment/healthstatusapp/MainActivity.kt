package com.assignment.healthstatusapp

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import androidx.activity.viewModels
import androidx.core.content.ContextCompat
import androidx.lifecycle.ViewModelProvider
import androidx.lifecycle.ViewModelProviders
import com.assignment.healthstatusapp.lib.HealthStatus
import com.assignment.healthstatusapp.lib.interfaces.HealthStatusUpdateListener
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {

    val TAG = "HealthStatusApp"
    lateinit var mHealthStatus : HealthStatus
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val mScoreViewModel = ViewModelProvider(this).get(ScoreViewModel::class.java)

        mHealthStatus = HealthStatus(applicationContext)

        button_sneeze.setOnClickListener {
            mHealthStatus.updateSneeze()
        }
        button_blow_nose.setOnClickListener {
            mHealthStatus.updateBlowNose()
        }
        button_take_medication.setOnClickListener {
            mHealthStatus.updateTakeMedication()
        }
        mHealthStatus.setHealthStatusUpdateListener(object : HealthStatusUpdateListener {
            override fun onUpdate(healthScore: Int, color: Int) {
                textview_score.text = healthScore.toString()
                textview_score.setTextColor(ContextCompat.getColor(applicationContext,color))
                mScoreViewModel.score = healthScore
                mScoreViewModel.color = color
            }
        })

        mHealthStatus.setScore(mScoreViewModel)

    }
}
