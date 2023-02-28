import React, { useEffect, useState } from 'react';
import * as commonStyle from '../../utils/commonStyle';
import {
    SafeAreaView,
    StyleSheet,
    ScrollView,
    View,
    Text,
    StatusBar,
    Image,
    FlatList,
    Button,
    TouchableOpacity,
    ActivityIndicator,
} from 'react-native';


const View2 = () => {

    return (
        <View style={styles.main_container}>

            <Text>View 2 !</Text>

        </View>
    );
};


const styles = StyleSheet.create({
    main_container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems:'center',
      justifyContent:'center',
    }

});


export default View2;