package com.assignment.shoeapp

import android.os.Parcelable
import kotlinx.android.parcel.Parcelize

@Parcelize
data class DataShoe (
    var shoeName:String,
    var shoeBrand:String,
    var launchDate:String,
    var stars:Int
):Parcelable