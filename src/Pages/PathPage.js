import  React, { Component } from 'react'
import { StyleSheet, View, Text, Dimensions } from 'react-native'
import MapView from 'react-native-maps'
//import console = require('console');

const {width, height} = Dimensions.get('window')
const SCREEN_HEIGHT = height
const SCREEN_WIDTH = width
const ASPECT_RATIO = SCREEN_WIDTH / SCREEN_HEIGHT
const LATITUDE_DELTA = 0.0922
const LONGITUDE_DELTA = LATITUDE_DELTA * ASPECT_RATIO

export default class PathPage extends Component {

    constructor(props) {
        super(props)

        this.state = {
            initialPosition: {
                latitude: 37.78825,
                longitude: -122.4324,
                latitudeDelta: 0.0922,
                longitudeDelta: 0.0421,
            },
            markerPosition: {
                latitude: 0,
                longitude: 0
            }
        }
    }

    watchId: ?number = null

    componentDidMount() {
        navigator.geolocation.getCurrentPosition((position) => {
            const lat = parseFloat(position.coords.latitude) 
            const long = parseFloat(position.coords.longitude)

            const initialRegion = {
                latitude: lat,
                longitude: long,
                latitudeDelta: LATITUDE_DELTA,
                longitudeDelta: LONGITUDE_DELTA
            }

            this.setState({initialPosition: initialRegion})
            this.setState({markerPosition: initialRegion})
        },
        (error) => console.log(error),
        {enableHighAccuracy: true, timeout: 20000, maximumAge: 1000})

        this.watchId = navigator.geolocation.watchPosition((position) => {
            const lat = parseFloat(position.coords.latitude)
            const long = parseFloat(position.coords.longitude)

            const lastRegion = {
                latitude: lat,
                longitude: long,
                latitudeDelta: LATITUDE_DELTA,
                longitudeDelta: LONGITUDE_DELTA
            }

            this.setState({initialPosition: lastRegion})
            this.setState({markerPosition: lastRegion})
        })
    }

    componentWillMount() {
        navigator.geolocation.clearWatch(this.watchId)
    }

    render () {
        return (
            <View style={styles.mapsContainer}>
                <MapView
                    style={styles.map}
                    initialRegion={this.state.initialPosition}>

                    <MapView.Marker
                        coordinate={this.state.initialPosition}>
                        <View style={styles.radius}>
                            <View style={styles.marker}></View>
                        </View>
                    </MapView.Marker>
                </MapView>
            </View>
        )
    }
}

const styles = StyleSheet.create({
    radius: {
        height: 50,
        width: 50,
        borderRadius: 50 / 2,
        overflow: 'hidden',
        backgroundColor: 'rgba(0, 122, 255, 0.1)',
        borderWidth: 1,
        borderColor: 'rgba(0, 122, 255, 0.3)',
        alignItems: 'center',
        justifyContent: 'center'
    },
    marker: {
        width: 20,
        height: 20,
        borderWidth: 3,
        borderColor: 'white',
        borderRadius: 20 / 2,
        overflow: 'hidden',
        backgroundColor: '#007AFF'
    },
    mapsContainer: {
        ...StyleSheet.absoluteFillObject,
    },
    map: {
        ...StyleSheet.absoluteFillObject,
    }
});