#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <pthread.h>
#include <semaphore.h>

#define up(sem) sem_post(sem)
#define down(sem) sem_wait(sem)

// The maximum number of client threads.
#define MAX_CLIENTS 25
#define DELAY(i)	sleep(rand() % i)

// Function prototypes
void *client(void *);
void *barber(void *);

sem_t clients;	// #clients sleeping on the chairs
sem_t barbers;	// #barbers ready for cutting hair
sem_t mutex;	// binary semaphore for mutual exclusion
sem_t seatBelt;	// to synchronize when both the client and barber are done 
int waiting;	// same value as clients
int numChairs;	// #chairs in the barbershop
int numClients; // total no of clients will go to the shop today
int allDone = 0;// tell the barber time to go home

int main(int argc, char *argv[]) {	// argument count, argument values. 
    pthread_t btid;
    pthread_t tid[MAX_CLIENTS];
	int Number[MAX_CLIENTS];	// client ID
    int i;
            
    // Check for input syntax
    if (argc != 3) {
		printf("Usage: %s <Num clients> <Num Chairs>\n", argv[0]);
		exit(-1);
    }
    
    // Get the command line arguments and convert them into integers.
    numClients = atoi(argv[1]);
    numChairs = atoi(argv[2]);
    
    // Make sure the number of threads is less than the number of clients we can support.
    if (numClients > MAX_CLIENTS) {
		printf("The maximum number of clients is %d.\n", MAX_CLIENTS);
		exit(-1);
    }
    
    // Initialize the numbers array.
    for (i=0; i<MAX_CLIENTS; i++) {
		Number[i] = i;
    }
		
    // Initialize the semaphores with initial values...
    sem_init(&clients, 0, 0);
    sem_init(&barbers, 0, 0);
    sem_init(&mutex, 0, 1);
    sem_init(&seatBelt, 0, 0);
    
    // Create the barber.
    pthread_create(&btid, NULL, barber, NULL);

    // Create the clients.
    for (i=0; i<numClients; i++)
		pthread_create(&tid[i], NULL, client, (void *)&Number[i]);

    // Join each of the threads to wait for them to finish.
    for (i=0; i<numClients; i++)
		pthread_join(tid[i],NULL); 

    // When all of the clients are finished, kill the barber thread.
    allDone = 1; 
    up(&clients);  // Wake the barber so he can go home.
	pthread_join(btid,NULL); 
}

void *client(void *number) {
    int clientID = *(int *)number;
	
    DELAY(15);
    printf("client %d arrived at barber shop.\n", clientID);

    // Đặt đoạn kiểm soát cạnh tranh ở đây
	// kiểm tra số ghế
		// tăng số đếm khách hàng lên 1
		// đánh thức thợ cắt tóc
		// in ra "Client i is waiting for a hair cut"
		// kết thúc đoạn mã cạnh tranh ở đây
		
		// ngủ chờ cho tới khi tìm được 1 thợ cắt tóc
		
		// get hair cut for a while
		// In ra "Client i is having a haircut\n"
		// dùng semaphore seatBelt đồng bộ hoạt động cắt tóc
		
		// In ra "Client i is done and going home"
	// bỏ đi nếu hết ghế
		// In dòng "Shop full. Client i is leaving"
		// kết thúc đoạn mã cạnh tranh ở đây
	
}

void *barber(void *nothing) {
    while (1) {

		// in dòng "The barber tries to get a client");
		// Sleep until a client arrives

		// Keep on working till all clients are served.
		if (!allDone) {

			// đặt lệnh kiểm soát cạnh tranh ở đây
			// giảm số khách chờ trên ghế đi 1
			// đánh thức khách hàng ngủ chờ
			// kết thúc đoạn mã cạnh tranh 
			
			// Take a random amount of time to cut the client's hair.
			printf("The barber is cutting hair\n");
			DELAY(3);
			printf("The barber has finished cutting hair.\n");

			// Dùng semaphore seatBelt thả khách hàng ra khi xong
		}
		else {
			printf("The barber is going home for the day.\n");
			break; 
		}
    }
}

