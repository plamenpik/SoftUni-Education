class Hotel {
    constructor(name, capacity) {
        this.name = name;
        this.capacity = capacity;
        this.bookings = [];
        this.currentBookingNumber = 1;
        this.singleCapacity = Math.floor(capacity * 0.5);
        this.doubleCapacity = Math.floor(capacity * 0.3);
        this.mesonetCapacity = Math.floor(capacity * 0.2);
        this.servicesPricing = {
            food: 10,
            drink: 15,
            housekeeping: 25
        };
        this.roomsPricing = {
                single: 50,
                double: 90,
                maisonette: 135
        };
    }



    rentARoom(clientName, roomType, nights) {
        let output;
        switch (roomType) {
            case 'single':
                if (this.singleCapacity > 0) {
                    output = `Enjoy your time here Mr./Mrs. ${clientName}. Your booking is ${this.currentBookingNumber}.`;
                    let client = {
                        clientName: clientName,
                        roomType: roomType,
                        nights: nights,
                        roomNumber: this.currentBookingNumber
                    };
                    this.bookings.push(client);
                    this.currentBookingNumber++;
                    this.singleCapacity--;
                } else {
                    return `No double rooms available! Available double rooms: ${this.doubleCapacity}. Available maisonette rooms: ${this.mesonetCapacity}`
                }
                return output;
            case 'double':
                if (this.singleCapacity > 0) {
                    output = `Enjoy your time here Mr./Mrs. ${clientName}. Your booking is ${this.currentBookingNumber}.`;
                    let client = {
                        clientName: clientName,
                        roomType: roomType,
                        nights: nights,
                        roomNumber: this.currentBookingNumber
                    };
                    this.bookings.push(client);
                    this.currentBookingNumber++;
                    this.doubleCapacity--;
                } else {
                    return `No double rooms available! Available double rooms: ${this.singleCapacity}. Available maisonette rooms: ${this.mesonetCapacity}`
                }
                return output;
            case 'maisonette':
                if (this.singleCapacity > 0) {
                    output = `Enjoy your time here Mr./Mrs. ${clientName}. Your booking is ${this.currentBookingNumber}.`;
                    let client = {
                        clientName: clientName,
                        roomType: roomType,
                        nights: nights,
                        roomNumber: this.currentBookingNumber
                    };
                    this.bookings.push(client);
                    this.currentBookingNumber++;
                    this.mesonetCapacity--;
                } else {
                    return `No maisonette rooms available! Available double rooms: ${this.singleCapacity}. Available double rooms: ${this.doubleCapacity}`
                }
                return output;
        }
    }

    roomService(currentBookingNumber, serviceType) {
        let result = [];
        for (let i = 0; i < this.bookings.length ; i++) {
            if (this.bookings[i].roomNumber === currentBookingNumber) {
                if (!this.servicesPricing.hasOwnProperty(serviceType)) {
                    result.push(`We do not offer ${serviceType} service.`);
                }
                this.bookings[i].services = [];
                this.bookings[i].services.push(serviceType);
                result.push(`Mr./Mrs. ${this.bookings[i].clientName}, Your order for ${serviceType} service has been successful.`);
            } else {
                result.push(`The booking ${currentBookingNumber} is invalid.`)
            }
        }
        result.forEach((e) => console.log(e));
    }
}

let hotel = new Hotel('HotUni', 10);

hotel.rentARoom('Peter', 'single', 4);
hotel.rentARoom('Robert', 'double', 4);
hotel.rentARoom('Geroge', 'maisonette', 6);

console.log(hotel.roomService(3, 'housekeeping'));
console.log(hotel.roomService(3, 'drink'));
console.log(hotel.roomService(2, 'room'));

console.log(hotel.bookings);
