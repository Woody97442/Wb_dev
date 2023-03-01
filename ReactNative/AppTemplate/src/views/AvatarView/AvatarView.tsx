import React from 'react';
import { Button, ButtonGroup, withTheme, Text, Avatar } from '@rneui/themed';

import {
    SafeAreaView,
    StyleSheet,
    ScrollView,
    View,
    StatusBar,
    Image,
    FlatList,
    TouchableOpacity,
    ActivityIndicator,
} from 'react-native';


const AvatarView = () => {

    return (

        <View style={styles.main_container}>
            <Avatar
            onPress={() => ""}
            rounded
            size={148}
            source={{uri:'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'}}
            />
            <Text>Lily</Text>
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


export default AvatarView;