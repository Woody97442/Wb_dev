import React from 'react';
import {StyleSheet,View} from 'react-native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import FontistoIcons from 'react-native-vector-icons/Fontisto';
import HomeView from '../HomeView/HomeView';
import BaseView from '../BaseView/BaseView';
import AvatarView from '../AvatarView/AvatarView';

const Tab = createMaterialBottomTabNavigator();

const BottomTabView = () => {
    
    return (
        <Tab.Navigator
            initialRouteName="tab_home"
            barStyle={{ backgroundColor: '#fff' }}
        >
            <Tab.Screen
                name="tab_home"
                component={HomeView}
                options={{
                    tabBarLabel: 'Home',
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="home" color={"blue"} size={26} />
                    ),
                }}
            />
            <Tab.Screen
                name="Notifications"
                component={BaseView}
                options={{
                    tabBarLabel: 'Messages',
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="chat" color={"blue"} size={26} />
                    ),
                    tabBarBadge:3,
                }}
            />
            <Tab.Screen
                name="Shop"
                component={AvatarView}
                options={{
                    tabBarLabel: 'Shop',
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="shopping" color={"blue"} size={26} />
                        ),
                    }}
            />
            <Tab.Screen
                name="Profile"
                component={AvatarView}
                options={{
                    tabBarLabel: 'Profile',
                    tabBarIcon: ({ color }) => (
                        <MaterialCommunityIcons name="account-circle" color={"blue"} size={26} />
                    ),
                }}
            />
            <Tab.Screen
                name="Settings"
                component={AvatarView}
                options={{
                    tabBarLabel: 'Settings',
                    tabBarIcon: ({ color }) => (
                        <FontistoIcons name="player-settings" color={"blue"} size={26} />
                    ),
                }}
            />
            
            
        </Tab.Navigator>
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


export default BottomTabView;